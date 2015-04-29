<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
  fields: 
    caption: 
      label: Caption
      type: text
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text 
    type:  textarea
  address:
    label: Address
    type: text
  phone:
    label: Telephone
    type: tel
    width: 1/2
  mail:
    label: E-Mail
    type: email
    width: 1/2
  social:
    label: Mut on
    type: textarea
  awards:
    label: Mut wins
    type: textarea
  talks:
    label: Mut talks
    type: textarea
  newsletter:
    label: Up to date with Mut
    type: textarea
  interships:
    label: Interships
    type: textarea
  infomail:
    label: Ask Mut
    type: textarea
  warning:
    label: Warning
    type: textarea