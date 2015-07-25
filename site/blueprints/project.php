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
  pagebkcolor:
    label: Project background color
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
    caption: 
      label: Slide caption (used also for alt text)
      type: text
      placeholder: If empty it will use the project title
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
    poster:
      label: Is this a video thumbnail?
      type: checkbox
      text: Yes!
    info:
      label:
      type: info
      text: 'Remember: the thumbnail must have the same name as the video and it must be a .jpg file. For example video.mp4 and video.jpg.'