<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  keywords:
    label: Keywords
    type:  tags
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  menu:
    label: Menu Links
    type: textarea
  copyright:
    label: Copyright
    type:  textarea