<?php

class SingletonClass {
    protected static ?SingletonClass $_instance = null;
    use TraitForSingleton;
}