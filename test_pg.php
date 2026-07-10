<?php

$conn = pg_connect("
host=db.qtgaduhjbuxyosnmgpib.supabase.co
port=5432
dbname=postgres
user=postgres
password=pocongmakansingkong
");

if ($conn) {
    echo "Berhasil";
} else {
    echo "Gagal";
}
