<?php

interface IExpressao{
    public function avalia();
    public function aceita(Visitor $visitor);
}