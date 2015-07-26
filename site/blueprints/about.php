<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
fields:
  title:
    label: Title
    type:  text
  introtext:
    label: Introduction text 
    type:  textarea

  firstcol:
    label: First coloumn content
    type: textarea
  secondcol:
    label: Second coloumn content
    type: textarea
  thirdcol:
    label: Third coloumn content
    type: textarea

  line-a:
    type: line

  descriptioneng:
    label: English description
    type: textarea
  descriptiondeu:
    label: German description
    type: textarea
  descriptionita:
    label: Italian description
    type: textarea

  line-b:
    type: line

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
  credits:
    label: Credits
    type: textarea
  legal:
    label: Legal
    type: textarea

files:
  sortable: true
  fields: 
    fullname: 
      label: Name
      type: text
    bio: 
      label: Bio
      type: textarea