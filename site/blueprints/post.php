<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files: false
fields:
  title:
    label: Title (min. 70 characters)
    type:  textarea
  label:
    label: Tag
    type: text
    width: 1/2
  palette:
    label: Palette
    width: 1/2
    type: radio
    default: green
    options:
      green: Green/White
      red: Red/White
