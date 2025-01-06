/*
姓と名がそれぞれ lastName と firstName として与えられるので、
イニシャルを返す、nameInitials という関数を定義してください。
*/

<?php

function nameInitials(string $firstName, string $lastName): string{
    // 関数を完成させてください
   return $firstName[0] . "." . $lastName[0];
}