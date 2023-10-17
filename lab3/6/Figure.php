<?php

interface Figure {
    function draw(): string;
    function erase(): void;
    function move(): void;
    function getColor(): string;
    function setColor(): void;
}