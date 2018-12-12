<?php

/**
 * 递归解决斐波那契数列
 */

function recursive($n) {
    if ($n ==0) {
        return 0;
    }

    if ($n == 1) {
        return 1;
    }

    return recursive($n - 2) + recursive($n - 1);
}
