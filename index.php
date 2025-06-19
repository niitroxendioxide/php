<?php

function println(...$args) {
    $final_word = "";
    for ($i = 0; $i < func_num_args(); $i++) {
        $final_word = $final_word . $args[$i] . " ";
    }

    print $final_word . "\n";
};

function showHeader(int $size, string $text) {
    $tag = "<h" . $size . ">";
    $end = "</h" . $size . ">";

    echo $tag . $text . $end;
}

// println("hola");
for ($u = 1; $u < 7; $u++) {
    showHeader($u, "Soy un header: " . $u);
}

?>