<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  intro:
    label: Introduction
    type:  textarea
  address:
    label: Address
    type: text
  phone:
    label: Telephone
    type: text
    width: 1/2
  mail:
    label: E-Mail
    type: email
    width: 1/2
  clients:
    label: Clients
    type:  textarea
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
  infomail:
    label: Ask Mut
    type: textarea
  warning:
    label: Warning
    type: textarea