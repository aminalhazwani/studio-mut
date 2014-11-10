<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields: 
    caption: 
        label: Text over picture
        type: text
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
  client:
    label: Client
    type: text
  category:
    label: Category
    type:  tags
  text:
    label: Content
    type:  textarea
    size: large