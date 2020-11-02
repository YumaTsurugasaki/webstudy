<?php

class Animal
{
    //名前のプロパティ
    private $name = "";

    //名前のゲッタ
    public function getName(): string
    {
        return $this->name;
    }
    //名前のセッタ
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function printName(): void
    {
        echo '名前：', $this->name, PHP_EOL;
    }
}

?>
