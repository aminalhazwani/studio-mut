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
        label: Open in new tab?
        type: radio
        default: no
        options:
          no: "No"
          yes: "Yes"
  info:
    type: info
    label: Remember
    text: >
      Add the hash "#archive" to the menu item that should open the archive panel
  line-b:
    type: line
  newsletterplaceholder:
    label: Newsletter placeholder message
    type: text
  newslettersuccess:
    label: Newsletter success message
    type: text
  newslettererror:
    label: Newsletter error message
    type: text
  line-c:
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