<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  keywords:
    label: Keywords
    type:  tags
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  street:
    label: Street
    type: text
    width: 1/2
  city:
    label: City
    type: text
    width: 1/4
  country:
    label: Country
    type: text
    width: 1/4
  contact:
    label: Contact 
    type: textarea
  interships:
    label: Interships 
    type: textarea
  copyright:
    label: Copyright
    type:  textarea