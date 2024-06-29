<?php

// 1. apa output dari kode berikut:
$a = 5;
function test() {
    $a = 10;
    echo $a;
}
test();
// jawaban:
// output: 10;

// 2. Bagaimana cara mengakses variabel global di dalam sebuah fungsi tanpa menggunakan kata kunci global?
//      a. Menggunakan kata kunci local
//      b. Menggunakan array super global $GLOBALS
//      c. Menggunakan kata kunci static
//      d. Menggunakan kata kunci super
// jawaban:
// b. Menggunakan array super globals

// 3. Apa output dari kode berikut ini?
$name = 'Alice';
function getName() {
    global $name;
    echo $name;
}
getName();
// jawaban:
// output: Alice

// 4. Apa yang akan terjadi jika kita mencoba mengakses variabel lokal di luar fungsi di mana variabel tersebut didefinisikan?
//      a. Variabel dapat diakses tanpa masalah
//      b. Akan menghasilkan error
//      c. Variabel akan bernilai null
//      d. Variabel akan bernilai undefined
// jawaban:
// b. akan menghasilkan error

// 5. Apa output dari kode berikut ini?
function testStatic() {
    static $count = 0;
    $count++;
    echo $count;
}
testStatic();
testStatic();
testStatic();
// jawaban:
// 0
// 1
// 2

// 6. Variabel global di PHP hanya bisa diakses di luar fungsi.
// Benar
// Salah
// jawaban: benar

// 7. Array super global seperti $_POST hanya bisa digunakan di dalam fungsi.
// Benar
// Salah
// jawaban: salah

// 8. Variabel statis dalam fungsi PHP mempertahankan nilainya di antara pemanggilan fungsi.
// Benar
// Salah
// jawaban: benar

// 9. Jelaskan perbedaan antara variabel global dan variabel super global di PHP.
// Variabel Global: Variabel yang dideklarasikan di luar fungsi dan dapat diakses di dalam fungsi dengan menggunakan kata kunci global atau array $GLOBALS.
// Variabel Super Global: Variabel bawaan PHP yang dapat diakses dari mana saja dalam script tanpa perlu menggunakan kata kunci global. 
// Contoh variabel super global adalah $_GET, $_POST, $_SESSION, $_COOKIE, $_SERVER, $_ENV, $_FILES, $_REQUEST, dan $GLOBALS.

// 10. Apa yang terjadi jika kita mendefinisikan variabel dengan kata kunci static di dalam sebuah fungsi? Jelaskan dengan contoh.
// jawaban: 
// varaiabel tersebut akan mempertahankan nilainya di antara pemanggilan fungsi
// contoh:
// function staticVar {
//     static $number = 0;
//     $number++;
//     echo $number;
// }
// staticVar();