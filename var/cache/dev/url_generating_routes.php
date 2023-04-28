<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_allusers_index' => [[], ['_controller' => 'App\\Controller\\AllusersController::index'], [], [['text', '/allusers/']], [], [], []],
    'app_allusers_new' => [[], ['_controller' => 'App\\Controller\\AllusersController::new'], [], [['text', '/allusers/new']], [], [], []],
    'app_allusers_show' => [['id_user'], ['_controller' => 'App\\Controller\\AllusersController::show'], [], [['variable', '/', '[^/]++', 'id_user', true], ['text', '/allusers']], [], [], []],
    'app_allusers_edit' => [['id_user'], ['_controller' => 'App\\Controller\\AllusersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_user', true], ['text', '/allusers']], [], [], []],
    'app_allusers_delete' => [['id_user'], ['_controller' => 'App\\Controller\\AllusersController::delete'], [], [['variable', '/', '[^/]++', 'id_user', true], ['text', '/allusers']], [], [], []],
    'app_ban_index' => [[], ['_controller' => 'App\\Controller\\BanController::index'], [], [['text', '/ban/']], [], [], []],
    'app_ban_new' => [[], ['_controller' => 'App\\Controller\\BanController::new'], [], [['text', '/ban/new']], [], [], []],
    'app_ban_show' => [['id'], ['_controller' => 'App\\Controller\\BanController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ban']], [], [], []],
    'app_ban_edit' => [['id'], ['_controller' => 'App\\Controller\\BanController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ban']], [], [], []],
    'app_ban_delete' => [['id'], ['_controller' => 'App\\Controller\\BanController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ban']], [], [], []],
    'app_category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], [], []],
    'app_category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'app_category_show' => [['id_category'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id_category', true], ['text', '/category']], [], [], []],
    'app_category_edit' => [['id_category'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_category', true], ['text', '/category']], [], [], []],
    'app_category_delete' => [['id_category'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id_category', true], ['text', '/category']], [], [], []],
    'app_challenge_index' => [[], ['_controller' => 'App\\Controller\\ChallengeController::index'], [], [['text', '/challenge/']], [], [], []],
    'app_challenge_new' => [[], ['_controller' => 'App\\Controller\\ChallengeController::new'], [], [['text', '/challenge/new']], [], [], []],
    'app_challenge_show' => [['id_challenge'], ['_controller' => 'App\\Controller\\ChallengeController::show'], [], [['variable', '/', '[^/]++', 'id_challenge', true], ['text', '/challenge']], [], [], []],
    'app_challenge_edit' => [['id_challenge'], ['_controller' => 'App\\Controller\\ChallengeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_challenge', true], ['text', '/challenge']], [], [], []],
    'app_challenge_delete' => [['id_challenge'], ['_controller' => 'App\\Controller\\ChallengeController::delete'], [], [['variable', '/', '[^/]++', 'id_challenge', true], ['text', '/challenge']], [], [], []],
    'app_comment_index' => [[], ['_controller' => 'App\\Controller\\CommentController::index'], [], [['text', '/comment/']], [], [], []],
    'app_comment_new' => [[], ['_controller' => 'App\\Controller\\CommentController::new'], [], [['text', '/comment/new']], [], [], []],
    'app_comment_show' => [['id_comment'], ['_controller' => 'App\\Controller\\CommentController::show'], [], [['variable', '/', '[^/]++', 'id_comment', true], ['text', '/comment']], [], [], []],
    'app_comment_edit' => [['id_comment'], ['_controller' => 'App\\Controller\\CommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_comment', true], ['text', '/comment']], [], [], []],
    'app_comment_delete' => [['id_comment'], ['_controller' => 'App\\Controller\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id_comment', true], ['text', '/comment']], [], [], []],
    'app_Dashboard_index' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/Dashboard/']], [], [], []],
    'app_Dashboard_show' => [[], ['_controller' => 'App\\Controller\\DashboardController::show'], [], [['text', '/Dashboard/Dashboard']], [], [], []],
    'app_demandetravail_index' => [[], ['_controller' => 'App\\Controller\\DemandetravailController::index'], [], [['text', '/demandetravail/']], [], [], []],
    'app_demandetravail_new' => [[], ['_controller' => 'App\\Controller\\DemandetravailController::new'], [], [['text', '/demandetravail/new']], [], [], []],
    'app_demandetravail_show' => [['idDemande'], ['_controller' => 'App\\Controller\\DemandetravailController::show'], [], [['variable', '/', '[^/]++', 'idDemande', true], ['text', '/demandetravail']], [], [], []],
    'app_demandetravail_edit' => [['idDemande'], ['_controller' => 'App\\Controller\\DemandetravailController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idDemande', true], ['text', '/demandetravail']], [], [], []],
    'app_demandetravail_delete' => [['idDemande'], ['_controller' => 'App\\Controller\\DemandetravailController::delete'], [], [['variable', '/', '[^/]++', 'idDemande', true], ['text', '/demandetravail']], [], [], []],
    'app_favoris_turoial_index' => [[], ['_controller' => 'App\\Controller\\FavorisTuroialController::index'], [], [['text', '/favoris/turoial/']], [], [], []],
    'app_favoris_turoial_new' => [[], ['_controller' => 'App\\Controller\\FavorisTuroialController::new'], [], [['text', '/favoris/turoial/new']], [], [], []],
    'app_favoris_turoial_show' => [['id_favoris'], ['_controller' => 'App\\Controller\\FavorisTuroialController::show'], [], [['variable', '/', '[^/]++', 'id_favoris', true], ['text', '/favoris/turoial']], [], [], []],
    'app_favoris_turoial_edit' => [['id_favoris'], ['_controller' => 'App\\Controller\\FavorisTuroialController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_favoris', true], ['text', '/favoris/turoial']], [], [], []],
    'app_favoris_turoial_delete' => [['id_favoris'], ['_controller' => 'App\\Controller\\FavorisTuroialController::delete'], [], [['variable', '/', '[^/]++', 'id_favoris', true], ['text', '/favoris/turoial']], [], [], []],
    'app_grosmots_index' => [[], ['_controller' => 'App\\Controller\\GrosmotsController::index'], [], [['text', '/grosmots/']], [], [], []],
    'app_grosmots_new' => [[], ['_controller' => 'App\\Controller\\GrosmotsController::new'], [], [['text', '/grosmots/new']], [], [], []],
    'app_grosmots_show' => [['idMot'], ['_controller' => 'App\\Controller\\GrosmotsController::show'], [], [['variable', '/', '[^/]++', 'idMot', true], ['text', '/grosmots']], [], [], []],
    'app_grosmots_edit' => [['idMot'], ['_controller' => 'App\\Controller\\GrosmotsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idMot', true], ['text', '/grosmots']], [], [], []],
    'app_grosmots_delete' => [['idMot'], ['_controller' => 'App\\Controller\\GrosmotsController::delete'], [], [['variable', '/', '[^/]++', 'idMot', true], ['text', '/grosmots']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_lignepanier_index' => [[], ['_controller' => 'App\\Controller\\LignepanierController::index'], [], [['text', '/lignepanier/']], [], [], []],
    'app_lignepanier_new' => [[], ['_controller' => 'App\\Controller\\LignepanierController::new'], [], [['text', '/lignepanier/new']], [], [], []],
    'app_lignepanier_show' => [['idlignepanier'], ['_controller' => 'App\\Controller\\LignepanierController::show'], [], [['variable', '/', '[^/]++', 'idlignepanier', true], ['text', '/lignepanier/showlignepanier']], [], [], []],
    'app_lignepanier_edit' => [['idlignepanier'], ['_controller' => 'App\\Controller\\LignepanierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idlignepanier', true], ['text', '/lignepanier']], [], [], []],
    'app_lignepanier_delete_with_ajax' => [['idlignepanier'], ['_controller' => 'App\\Controller\\LignepanierController::deleteWithAjax'], [], [['variable', '/', '[^/]++', 'idlignepanier', true], ['text', '/lignepanier/deleteAjaxligne']], [], [], []],
    'app_offretravail_index' => [[], ['_controller' => 'App\\Controller\\OffretravailController::index'], [], [['text', '/offretravail/']], [], [], []],
    'app_offretravail_new' => [[], ['_controller' => 'App\\Controller\\OffretravailController::new'], [], [['text', '/offretravail/new']], [], [], []],
    'app_offretravail_show' => [['idoffre'], ['_controller' => 'App\\Controller\\OffretravailController::show'], [], [['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offretravail']], [], [], []],
    'app_offretravail_edit' => [['idoffre'], ['_controller' => 'App\\Controller\\OffretravailController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offretravail']], [], [], []],
    'app_offretravail_delete' => [['idoffre'], ['_controller' => 'App\\Controller\\OffretravailController::delete'], [], [['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offretravail']], [], [], []],
    'app_offretravailarchive_index' => [[], ['_controller' => 'App\\Controller\\OffretravailarchiveController::index'], [], [['text', '/offretravailarchive/']], [], [], []],
    'app_offretravailarchive_new' => [[], ['_controller' => 'App\\Controller\\OffretravailarchiveController::new'], [], [['text', '/offretravailarchive/new']], [], [], []],
    'app_offretravailarchive_show' => [['idoffre'], ['_controller' => 'App\\Controller\\OffretravailarchiveController::show'], [], [['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offretravailarchive']], [], [], []],
    'app_offretravailarchive_edit' => [['idoffre'], ['_controller' => 'App\\Controller\\OffretravailarchiveController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offretravailarchive']], [], [], []],
    'app_offretravailarchive_delete' => [['idoffre'], ['_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], [], [['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offretravailarchive']], [], [], []],
    'app_panier_index' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier/panier']], [], [], []],
    'app_panier_show' => [['idpanier'], ['_controller' => 'App\\Controller\\PanierController::show'], [], [['variable', '/', '[^/]++', 'idpanier', true], ['text', '/panier/showpanier']], [], [], []],
    'add_product' => [['idproduit'], ['_controller' => 'App\\Controller\\PanierController::ajouterProduitAuPanier'], [], [['variable', '/', '[^/]++', 'idproduit', true], ['text', '/panier/panier/add']], [], [], []],
    'viderpanier' => [['idpanier'], ['_controller' => 'App\\Controller\\PanierController::ViderPanier'], [], [['variable', '/', '[^/]++', 'idpanier', true], ['text', '/panier/viderpanier']], [], [], []],
    'app_participation_index' => [[], ['_controller' => 'App\\Controller\\ParticipationController::index'], [], [['text', '/participation/']], [], [], []],
    'app_participation_new' => [[], ['_controller' => 'App\\Controller\\ParticipationController::new'], [], [['text', '/participation/new']], [], [], []],
    'app_participation_show' => [['id_participation'], ['_controller' => 'App\\Controller\\ParticipationController::show'], [], [['variable', '/', '[^/]++', 'id_participation', true], ['text', '/participation']], [], [], []],
    'app_participation_edit' => [['id_participation'], ['_controller' => 'App\\Controller\\ParticipationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_participation', true], ['text', '/participation']], [], [], []],
    'app_participation_delete' => [['id_participation'], ['_controller' => 'App\\Controller\\ParticipationController::delete'], [], [['variable', '/', '[^/]++', 'id_participation', true], ['text', '/participation']], [], [], []],
    'app_payment' => [[], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['text', '/payment']], [], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\PaymentController::checkout'], [], [['text', '/checkout']], [], [], []],
    'success-url' => [['idpanier'], ['_controller' => 'App\\Controller\\PaymentController::successUrl'], [], [['variable', '/', '[^/]++', 'idpanier', true], ['text', '/success-url']], [], [], []],
    'cancel_url' => [[], ['_controller' => 'App\\Controller\\PaymentController::cancelUrl'], [], [['text', '/cancel_url']], [], [], []],
    'pdf' => [['idpanier'], ['_controller' => 'App\\Controller\\PaymentController::pdf'], [], [['variable', '/', '[^/]++', 'idpanier', true], ['text', '/pdf22']], [], [], []],
    'app_post_index' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/post/']], [], [], []],
    'app_post_new' => [[], ['_controller' => 'App\\Controller\\PostController::new'], [], [['text', '/post/new']], [], [], []],
    'app_post_show' => [['id_post'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'id_post', true], ['text', '/post']], [], [], []],
    'app_post_edit' => [['id_post'], ['_controller' => 'App\\Controller\\PostController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_post', true], ['text', '/post']], [], [], []],
    'app_post_delete' => [['id_post'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'id_post', true], ['text', '/post']], [], [], []],
    'app_post_like_index' => [[], ['_controller' => 'App\\Controller\\PostLikeController::index'], [], [['text', '/post/like/']], [], [], []],
    'app_post_like_new' => [[], ['_controller' => 'App\\Controller\\PostLikeController::new'], [], [['text', '/post/like/new']], [], [], []],
    'app_post_like_show' => [['id_like'], ['_controller' => 'App\\Controller\\PostLikeController::show'], [], [['variable', '/', '[^/]++', 'id_like', true], ['text', '/post/like']], [], [], []],
    'app_post_like_edit' => [['id_like'], ['_controller' => 'App\\Controller\\PostLikeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_like', true], ['text', '/post/like']], [], [], []],
    'app_post_like_delete' => [['id_like'], ['_controller' => 'App\\Controller\\PostLikeController::delete'], [], [['variable', '/', '[^/]++', 'id_like', true], ['text', '/post/like']], [], [], []],
    'app_produits_back' => [[], ['_controller' => 'App\\Controller\\ProduitsBackController::index'], [], [['text', '/produits/back']], [], [], []],
    'app_produitsBack_show' => [['idproduit'], ['_controller' => 'App\\Controller\\ProduitsBackController::show'], [], [['variable', '/', '[^/]++', 'idproduit', true], ['text', '/showBack']], [], [], []],
    'app_produits_back_new' => [[], ['_controller' => 'App\\Controller\\ProduitsBackController::new'], [], [['text', '/newBack']], [], [], []],
    'app_produits_back_edit' => [['idproduit'], ['_controller' => 'App\\Controller\\ProduitsBackController::edit'], [], [['text', '/editBack'], ['variable', '/', '[^/]++', 'idproduit', true]], [], [], []],
    'app_produits_delete_back' => [['idproduit'], ['_controller' => 'App\\Controller\\ProduitsBackController::delete'], [], [['variable', '/', '[^/]++', 'idproduit', true], ['text', '/deleteBack']], [], [], []],
    'app_produits_index' => [[], ['_controller' => 'App\\Controller\\ProduitsController::index'], [], [['text', '/produits/']], [], [], []],
    'app_produits_new' => [[], ['_controller' => 'App\\Controller\\ProduitsController::new'], [], [['text', '/produits/new']], [], [], []],
    'app_produits_show' => [['idproduit'], ['_controller' => 'App\\Controller\\ProduitsController::show'], [], [['variable', '/', '[^/]++', 'idproduit', true], ['text', '/produits']], [], [], []],
    'app_produits_edit' => [['idproduit'], ['_controller' => 'App\\Controller\\ProduitsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idproduit', true], ['text', '/produits']], [], [], []],
    'app_produits_delete' => [['idproduit'], ['_controller' => 'App\\Controller\\ProduitsController::delete'], [], [['variable', '/', '[^/]++', 'idproduit', true], ['text', '/produits']], [], [], []],
    'app_rating_index' => [[], ['_controller' => 'App\\Controller\\RatingController::index'], [], [['text', '/rating/']], [], [], []],
    'app_rating_new' => [[], ['_controller' => 'App\\Controller\\RatingController::new'], [], [['text', '/rating/new']], [], [], []],
    'app_rating_show' => [['id_rating'], ['_controller' => 'App\\Controller\\RatingController::show'], [], [['variable', '/', '[^/]++', 'id_rating', true], ['text', '/rating']], [], [], []],
    'app_rating_edit' => [['id_rating'], ['_controller' => 'App\\Controller\\RatingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_rating', true], ['text', '/rating']], [], [], []],
    'app_rating_delete' => [['id_rating'], ['_controller' => 'App\\Controller\\RatingController::delete'], [], [['variable', '/', '[^/]++', 'id_rating', true], ['text', '/rating']], [], [], []],
    'app_tutoriel_index' => [[], ['_controller' => 'App\\Controller\\TutorielController::index'], [], [['text', '/tutoriel/']], [], [], []],
    'app_tutoriel_new' => [[], ['_controller' => 'App\\Controller\\TutorielController::new'], [], [['text', '/tutoriel/new']], [], [], []],
    'app_tutoriel_show' => [['id_tutoriel'], ['_controller' => 'App\\Controller\\TutorielController::show'], [], [['variable', '/', '[^/]++', 'id_tutoriel', true], ['text', '/tutoriel']], [], [], []],
    'app_tutoriel_edit' => [['id_tutoriel'], ['_controller' => 'App\\Controller\\TutorielController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_tutoriel', true], ['text', '/tutoriel']], [], [], []],
    'app_tutoriel_delete' => [['id_tutoriel'], ['_controller' => 'App\\Controller\\TutorielController::delete'], [], [['variable', '/', '[^/]++', 'id_tutoriel', true], ['text', '/tutoriel']], [], [], []],
    'app_video_index' => [[], ['_controller' => 'App\\Controller\\VideoController::index'], [], [['text', '/video/']], [], [], []],
    'app_video_new' => [[], ['_controller' => 'App\\Controller\\VideoController::new'], [], [['text', '/video/new']], [], [], []],
    'app_video_show' => [['id_video'], ['_controller' => 'App\\Controller\\VideoController::show'], [], [['variable', '/', '[^/]++', 'id_video', true], ['text', '/video']], [], [], []],
    'app_video_edit' => [['id_video'], ['_controller' => 'App\\Controller\\VideoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_video', true], ['text', '/video']], [], [], []],
    'app_video_delete' => [['id_video'], ['_controller' => 'App\\Controller\\VideoController::delete'], [], [['variable', '/', '[^/]++', 'id_video', true], ['text', '/video']], [], [], []],
    'app_view_index' => [[], ['_controller' => 'App\\Controller\\ViewController::index'], [], [['text', '/view/']], [], [], []],
    'app_view_new' => [[], ['_controller' => 'App\\Controller\\ViewController::new'], [], [['text', '/view/new']], [], [], []],
    'app_view_show' => [['id_view'], ['_controller' => 'App\\Controller\\ViewController::show'], [], [['variable', '/', '[^/]++', 'id_view', true], ['text', '/view']], [], [], []],
    'app_view_edit' => [['id_view'], ['_controller' => 'App\\Controller\\ViewController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id_view', true], ['text', '/view']], [], [], []],
    'app_view_delete' => [['id_view'], ['_controller' => 'App\\Controller\\ViewController::delete'], [], [['variable', '/', '[^/]++', 'id_view', true], ['text', '/view']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
