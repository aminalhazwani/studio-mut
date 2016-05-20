<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: single
files: false
fields:
  title:
    label: Website title
    type:  text
  keywords:
    label: Keywords for SEO
    type:  tags
  description:
    label: Meta description for SEO
    type:  textarea
  trackingcode:
    label: Google Analytics tracking ID
    type:  text
  line-a:
    type: line
  menuItems:
    label: Menu items
    type: structure
    style: table
    entry:
      {{ label }}<br />
      {{ hyperlink }}<br />
      {{ target.option }}
    fields:
      label:
        label: Menu item text
        type: text
      hyperlink:
        label: Menu item link
        type: url
      target:
        label: Target blank
        type: radio
        default: no
        options:
          no: "No"
          yes: "Yes"
  line-b:
    type: line
  footer:
    label: Footer sentences
    type: structure
    style: table
    entry: {{ sentence }}
    fields:
      sentence:
        label: Sentence
        type: textarea