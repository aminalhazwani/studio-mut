<?php if(!defined('KIRBY')) exit ?>

title: Showcase
pages: false
files:
  sortable: true
  fields: 
    caption: 
      label: Caption (Alt text)
      type: text
    slidebkcolor: 
      label: Background color HEX
      type: text
    measure:
      label: Type
      type: radio
      options:
        full: Full screen
        fit: Enclosed
        background: Background image
    overtext: 
      label: Text over picture
      type: textarea
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    width: 1/2
  client:
    label: Client
    type: text
    width: 1/2
  category:
    label: Category
    type:  tags
    width: 1/2
  pagebkcolor:
    label: Background color HEX
    type: text
    width: 1/2