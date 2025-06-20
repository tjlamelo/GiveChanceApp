<?php

namespace App\Enums\Role;

enum Role: string
{
    /**
     * Super Administrateur
     * - Accès complet à tous les modules
     * - Gestion des administrateurs
     * - Configuration système globale
     * - Droits illimités
     */
    case SUPER_ADMIN = 'super-admin';

    /**
     * Administrateur
     * - Gestion complète des publications
     * - Modération des contenus/utilisateurs
     * - Gestion des catégories
     * - Pas d'accès à la configuration serveur
     */
    case ADMIN = 'admin';

    /**
     * Éditeur
     * - Publication/modification de tous les articles
     * - Modération des commentaires
     * - Ne peut pas gérer les paramètres du site
     * - Ne peut pas supprimer définitivement
     */
    case EDITOR = 'editor';

    /**
     * Auteur
     * - Créer/modifier ses propres articles
     * - Publier après validation  
     * - Ne peut pas modifier les articles d'autres auteurs
     * - Accès limité au dashboard
     */
    case AUTHOR = 'author';

    /**
     * Contributeur
     * - Proposer des articles en brouillon
     * - Modifier ses propres brouillons
     * - Ne peut pas publier directement
     * - Besoin de validation par un éditeur/admin
     */
    case CONTRIBUTOR = 'contributor';

    /**
     * Abonné
     * - Accès aux contenus premium
     * - Commenter les articles
     * - Recevoir des newsletters
     * - Pas de droits de rédaction
     */
    case SUBSCRIBER = 'subscriber';
}