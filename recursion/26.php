/*
Bobは近所にある円形の公園の外縁をランニングしようと考えました。
しかし公園の半径は分かっているのですが、外周がどのくらいの距離あるかはわかっていません。
半径radiusが与えられるので、円形の公園の周を出力する、circumferenceLength という関数を作成してください。
円周率は 3.14 としてください。

*/

<?php
// constは関数外での定義のみ
// 関数内で定数を定義するにはdefineを使用
const PI = 3.14;

function circumferenceLength(int $radius): float{
    // 関数を完成させてください
    return 2 * PI * $radius;
}