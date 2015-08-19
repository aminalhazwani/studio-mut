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
  client:
    label: Client
    type: text
    width: 1/2
  headercolor:
    label: Header text color
    type: color
    width: 1/2
    default: ffffff
  bkcolor:
    label: Slider background color
    type: color
    width: 1/2
    default: 000000
  text:
    label: Description for SEO and Open Graph
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
    slidebgcolor:
      label: Slide background color
      type: color
      default: 000000
    overtextcolor:
      label: Slide text color
      type: color
      default: ffffff
    overtext: 
      label: Slide text
      type: textarea