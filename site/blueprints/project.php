<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields: 
    caption: 
      label: Caption and Alt text
      type: text
    cover:
      label: Thumbnail
      type: checkbox
      text: Is this the project thumbnail?
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    width: 1/2
  keywords:
    label: Category
    type:  tags
    width: 1/2
  client:
    label: Client
    type: text
  text:
    label: Project decription
    type:  textarea