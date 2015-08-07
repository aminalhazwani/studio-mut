<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
fields:
  title:
    label: Title
    type:  text
  titl:
    label: Title on homepage
    type:  textarea
  date:
    label: Date
    type:  date
    width: 1/2
  bkcolor:
    label: Background color
    type: radio
    width: 1/2
    default: bg-black
    options:
      bg-black: Black
      bg-white: White
  client:
    label: Client
    type: text
  text:
    label: Description for SEO
    type: textarea
files:
  sortable: true
  fields: 
    cover:
      label: Is this the project preview?
      type: radio
      default: nein
      options: 
        ja: Yes, please!
        nein: No, thank you.
    measure:
      label: Slide size
      type: radio
      default: enclosed
      options:
        full: Full
        enclosed: Enclosed
    overtext: 
      label: Slide text
      type: textarea
    overtextcolor: 
      label: Slide text color
      type: radio
      default: text-black
      options:
        text-black: Black
        text-white: White