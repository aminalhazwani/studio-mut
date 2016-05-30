<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files: false
fields:
  title:
    label: Title
    type:  textarea
  tag:
    label: Tag
    type: text
    width: 1/3
  textcolor:
    label: Color text
    type: color
    default: 000000
    width: 1/3
  bgcolor:
    label: Background color
    type: color
    default: ffffff
    width: 1/3
