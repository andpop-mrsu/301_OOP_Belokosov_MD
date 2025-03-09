<?php

namespace App;

interface StackInterface
{
    function push(...$elems);
    function pop();
    function top();
    function isEmpty();
    function copy();
    function __toString();
}
