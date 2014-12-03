<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields: 
    cover:
      label: Thumbnail
      type: checkbox
      text: Is this the project thumbnail?
    measure:
      label: Width size
      type: radio
      default: full
      options:
        full: Full
        half: Half
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
  keywords:
    label: Category
    type:  tags
  client:
    label: Client
    type: text
  intro:
    label: Project abstract
    type:  textarea