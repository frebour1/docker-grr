<?php
# Les quatre lignes suivantes sont à modifier selon votre configuration
# ligne suivante : l'adresse de l'annuaire LDAP.
# Si c'est le même que celui qui heberge les scripts, mettre "localhost"
$ldap_adresse='einea_infra01.domselha.fr';
# ligne suivante : le port utilisé
$ldap_port='389';
# ligne suivante : l'identifiant et le mot de passe dans le cas d'un accès non anonyme
$ldap_login='LDAPREAD';
# Remarque : des problèmes liés à un mot de passe contenant un ou plusieurs caractères accentués ont déjà été constatés.
$ldap_pwd='ldapread05';
# ligne suivante : le chemin d'accès dans l'annuaire
$ldap_base='OU=SELHAGROUP,DC=domselha,DC=fr';
# ligne suivante : filtre LDAP supplémentaire (facultatif)
$ldap_filter='';
# ligne suivante : utiliser TLS
$use_tls=FALSE;
# Attention : si vous configurez manuellement ce fichier (sans passer par la configuration en ligne)
# vous devez tout de même activer LDAP en choisissant le "statut par défaut des utilisateurs importés".
# Pour cela, rendez-vous sur la page : configuration -> Configuration LDAP.

#SE3 variables
$ldap_group_member_attr="";
$ldap_group_base="";
$ldap_group_filter="";
$ldap_group_user_field="";
?>