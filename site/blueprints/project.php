<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields: 
    caption: 
      label: Caption and Alt text
      type: text
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    width: 1/2
  category:
    label: Category
    type:  tags
    width: 1/2
  client:
    label: Client
    type: text
  text:
    label: Content
    type:  textarea
    size: large