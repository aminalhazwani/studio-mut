<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields: 
    caption: 
      label: Caption (Alt text)
      type: text
    cover:
      label: Is this the project preview?
      type: radio
      default: nein
      options: 
        ja: Yes, please!
        nein: No, thank you.
    slidebkcolor: 
      label: Slide background color
      placeholder: '#000000'
      type: text
    measure:
      label: Size
      type: radio
      default: enclosed
      options:
        full: Full
        enclosed: Enclosed
    overtext: 
      label: Text over picture
      type: textarea
    poster:
      label: Is this the video preview?
      type: checkbox
      text: Yes, thanks!
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
  previewSize:
    label: Preview size
    width: 1/2
    type: radio
    default: full
    options:
      half: 50%
      full: 100%
  text:
    label: Descrption
    type: textarea