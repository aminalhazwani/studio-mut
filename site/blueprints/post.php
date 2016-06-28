<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files: false
fields:
  title:
    label: Title (min. 70 characters)
    type:  textarea
  link:
    label: Link 
    type:  url
  label:
    label: Tag
    type: text
    width: 1/2
  bgcolor:
    label: Background color
    type: color
    width: 1/4
    default: 42ec97
  txtcolor:
    label: Text color
    type: color
    width: 1/4
    default: ffffff
