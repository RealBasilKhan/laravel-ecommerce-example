<?php

function presentPrice($price)
{
  $amount = new \NumberFormatter('us_US', \NumberFormatter::CURRENCY);
  return $amount->format($price / 100);
}
