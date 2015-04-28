<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
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
    slidebkcolor: 
      label: Slide background color
      placeholder: '#ffffff'
      type: text
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
  pagebkcolor:
    label: Slider background color
    type: text
    width: 1/2
    placeholder: '#ffffff'
  previewSize:
    label: Preview size
    type: radio
    width: 1/2
    default: full
    options:
      half: 50%
      full: 100%
  tag:
    label: 'Category (You must hyphanate category names with more than one word: i.e. graphic-design)'
    type:  tags
  text:
    label: Description
    type: textarea