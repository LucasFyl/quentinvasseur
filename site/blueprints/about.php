<?php if(!defined('KIRBY')) exit ?>

title: About
template: about
pages: false
files: false
fields:
  Title:
  	label: Titre de la page
  	type: text
  	default: about
  mainTitle1:
    label: Titre principal 1
    type:  text
  mainTitle2:
    label: Titre principal 2
    type:  text
  smallTitle1:
    label: Titre colonne 1
    type:  text
  smallTitle2:
    label: Titre colonne 2
    type:  text
  textCol1:
    label: Texte colonne 1
    type:  textarea
    required: true
  textCol2:
    label: Texte colonne 2
    type:  textarea
  