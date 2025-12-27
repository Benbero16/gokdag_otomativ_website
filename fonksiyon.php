<?php
include_once("baglanti.php");

// GÜVENLİ HALE GETİRİLDİ
function VtVeriAl($table, $columns = "*", $conditions = "", $params = []) {
    global $baglanti;
    try {
        $sql = "SELECT {$columns} FROM {$table}";

        if (!empty($conditions)) {
            $sql .= " WHERE {$conditions}";
        }

        $stmt = $baglanti->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die("Sorgu hatası: " . $e->getMessage());
    }
}

function VtVeriSil($table, $conditions) {
    global $baglanti;

    try {
        $sql = "DELETE FROM {$table} WHERE {$conditions}";
        $stmt = $baglanti->prepare($sql);
        $stmt->execute();

        return $stmt->rowCount();
    } catch (PDOException $e) {
        die("Silme hatası: " . $e->getMessage());
    }
}
function VtVeriEkle($table, $veriler) {
    global $baglanti;

    try {
        // Kolon isimlerini ve yer tutucuları hazırla
        $kolonlar = implode(", ", array_keys($veriler));
        $placeholders = ":" . implode(", :", array_keys($veriler));

        $sql = "INSERT INTO {$table} ({$kolonlar}) VALUES ({$placeholders})";
        $stmt = $baglanti->prepare($sql);
        $stmt->execute($veriler);

        return $stmt->rowCount(); // kaç satır eklendi
    } catch (PDOException $e) {
        die("Ekleme hatası: " . $e->getMessage());
    }
}

function VtVeriGuncelle($table, $veriler, $kosulSQL) {
    global $baglanti;

    try {
        // Kolonları "ad = :ad" formatına çevir
        $guncelleAlanlari = [];
        foreach ($veriler as $key => $value) {
            $guncelleAlanlari[] = "$key = :$key";
        }

        $sql = "UPDATE {$table} SET " . implode(", ", $guncelleAlanlari) . " WHERE {$kosulSQL}";
        $stmt = $baglanti->prepare($sql);
        $stmt->execute($veriler);

        return $stmt->rowCount(); // kaç satır güncellendi
    } catch (PDOException $e) {
        die("Güncelleme hatası: " . $e->getMessage());
    }
}

function sifreHashle($sifre) {
    return password_hash($sifre, PASSWORD_DEFAULT);
}




// OTURUM ZAMAN AŞIMI KONTROLÜ
if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['kullanici_id'])) {
    $aktif_dosya = basename($_SERVER['PHP_SELF']);
    
    // auth.php ve baglanti.php hariç (giriş/çıkış işlemleri ve include dosyaları)
    if ($aktif_dosya != 'auth.php' && $aktif_dosya != 'baglanti.php') {
        $zaman_asimi = 1800; // 30 dakika (1800 saniye) - E-devlet ve bankalar genellikle bu süreyi kullanır.
        
        if (isset($_SESSION['son_hareket']) && (time() - $_SESSION['son_hareket'] > $zaman_asimi)) {
            session_unset();
            session_destroy();
            
            // Admin klasöründe miyiz kontrol et (basit yol kontrolü)
            // Eğer script admin klasöründeyse bir üst dizindeki giris.php'ye, değilse direkt giris.php'ye
            $admin_klasorunde = (strpos($_SERVER['SCRIPT_NAME'], '/admin/') !== false);
            $yonlendirme_yolu = $admin_klasorunde ? '../index.php' : 'index.php';
            
            // Yönlendirme
            if (!headers_sent()) {
                header("Location: $yonlendirme_yolu?timeout=1");
                exit;
            }
        }
        
        $_SESSION['son_hareket'] = time();
    }
}
?>