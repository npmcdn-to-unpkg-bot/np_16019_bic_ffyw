<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:37 AM
 */

$this->title = 'Terms And Condition';
$description = $model->description;

?>
<div class="pens term-and-condition terms_and_conditions">
    <div class="container" id="content_wrapper">
        <?php if (!empty($description)): ?>
            <?= $description ?>
        <?php else: ?>
            <?php if ((Yii::$app->language == 'fr_FR')): ?>
                <div class="contents">
                    <h3>Conditions</h3>

                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                            <p>Nous espérons que vous trouverez notre site Web utile et instructif. Veuillez nous rendre
                                visite souvent et en informer vos amis. En retour, nous vous demandons de respecter les
                                conditions ci-dessous. Veuillez les lire attentivement, car en utilisant notre site Web,
                                vous consentez automatiquement à vous y conformer.</p>
                            <p> BIC Inc. («&nbsp;BIC ») maintient ses sites Web à titre de service à la communauté
                                Internet. Les présentes conditions d'utilisation expliquent comment vous pouvez utiliser
                                ce site Web (le « site&nbsp;»). Les références au site dans ces conditions comprennent
                                le site Web suivant&nbsp;: BICFightForYourWrite.ca et toutes les pages Web associées.
                                L'accès au site BICFightForYourWrite.ca et son utilisation sont assujetties aux
                                conditions et modalités énoncées dans les présentes et à toutes les lois applicables.
                                BIC peut procéder à la modification de ces conditions de temps à autre en mettant à jour
                                cette publication. Vous devez lire attentivement ces conditions avant d'utiliser le
                                site. En accédant à ce site ou en l'utilisant ou en indiquant autrement votre
                                consentiment, vous acceptez d'être lié par les présentes conditions et par les documents
                                visés qui y figurent. Si vous n'acceptez pas l'une quelconque de ces conditions, vous
                                devez cesser immédiatement d'utiliser ce site.</p>
                            <p>Les présentes conditions comprennent notre Politique de confidentialité, disponible sur
                                BICFightForYourWrite.ca, est soumise à ces conditions en cas de conflit ou de
                                divergence.. Ce site Internet est conçu pour et s'adresse aux résidents du Canada qui
                                ont&nbsp; atteint l'âge de la majorité dans leur province ou territoire de résidence.
                                Nous cherchons à rendre ce site aussi accessible que possible.</p>
                            <p>Le présent site se destine uniquement à votre usage personnel et à un usage non
                                commercial. Comme condition de votre utilisation du site, vous convenez de ce qui suit&nbsp;:</p>
                            <ol style="list-style:lower-alpha;">
                                <li>de ne pas utiliser ce site à des fins illégales en vertu des lois applicables ou à
                                    des fins interdites par les présentes conditions;
                                </li>
                                <li>de ne pas mettre à la disposition à des tiers ou autrement publier, distribuer,
                                    télécharger, modifier, éditer, réutiliser, rediffuser, reproduire, transmettre,
                                    exécuter, afficher, ajouter de lien profond, générer des œuvres dérivées ou
                                    exploiter de quelque manière que ce soit le site ou ses textes, images, vidéos,
                                    fichiers sonores ou autres contenus multimédias, logiciels ou autres informations ou
                                    matériels soumis à, inclus sur ou accessibles à partir du site (le «&nbsp;contenu&nbsp;»)
                                    sauf si permis par nous en vertu des présentes conditions ou expressément prévus en
                                    vertu des lois applicables;
                                </li>
                                <li>de ne pas afficher ou transmettre tout matériel qui est offensant, nocif, illégal,
                                    menaçant, diffamatoire, obscène, abusif, haineux, incendiaire, discriminatoire,
                                    pornographique ou blasphématoire ou tout matériel susceptible de constituer ou
                                    d'encourager une conduite qui serait considérée comme une offense criminelle,
                                    donnerait lieu à une responsabilité civile, ou d'une autre manière violerait la loi;
                                </li>
                                <li>de ne pas utiliser le site pour diffuser des virus ou des logiciels malveillants ou
                                    tout autre code logiciel nuisible semblable;
                                </li>
                                <li>de ne pas représenter ou suggérer que nous approuvons tout autre entreprise, produit
                                    ou service sauf accord contraire écrit de notre part;
                                </li>
                                <li>que vous êtes seul responsable de l'ensemble des frais et des dépenses que vous
                                    pourriez engager en lien avec votre utilisation du site.
                                </li>
                            </ol>
                            <p>Nous nous réservons le droit d'empêcher ou de suspendre votre accès au site si vous ne
                                consentez pas à respecter l'une quelconque de ces conditions ou modalités ou à vous
                                conformer à toute loi applicable et nous nous réservons le droit de prendre les mesures
                                que nous jugeons appropriées dans les cas où les sites BIC sont utilisés pour diffuser
                                du matériel en contravention aux présentes interdictions.</p>
                            <p>Ce site et tous les droits de propriété intellectuelle liés au site (y compris, sans s'y
                                limiter, tout contenu) sont la propriété de BIC, de nos sociétés affiliées, filiales et
                                autres entités assciées et/ou nos concédants de licence ou partenaires commerciaux. BIC
                                et nos concédants de licence se réservent tous nos droits de propriété intellectuelle
                                (qui comprennent, sans toutefois s'y limiter, tous les droits d'auteur, marques de
                                commerce, noms de domaines, droits de conception, droits de base de données, brevets et
                                tout autre droit de propriété intellectuelle de quelque nature) qu'ils soient
                                enregistrés ou non n'importe où dans le monde.</p>
                            <p>Rien de ce qui est sur ce site ne devrait être interprété comme donnant par implication,
                                un estoppel ou autrement, une licence ou un droit d'utilisation de toute marque de
                                commerce sans notre permission écrite préalable et rien dans les présentes conditions ne
                                vous accorde aucun droit sur le site et/ou le contenu autre que celui qui est nécessaire
                                pour vous permettre d'accéder au site. Vous vous engagez à ne pas, et à ne pas essayer,
                                de contourner ou de supprimer tout avis de propriété intellectuelle figurant sur le site
                                et en particulier tous droits numériques ou autres technologies de sécurité intégrées ou
                                incorporées dans tout contenu du site. La diffusion, le téléchargement, l'édition, la
                                modification, la réutilisation, la reproduction, la rediffusion, la transmission,
                                l'exécution, l'affichage ou toute autre utilisation de ces marques de commerce ou de
                                tout autre matériel, sauf si les présentes l'autorisent, est expressément interdit et
                                peut contrevenir à la loi sur les droits d'auteur, à la loi sur la diffamation, à la loi
                                sur le respect de la vie privée et la publicité, ainsi qu’aux règlements et lois sur les
                                communications. En outre, veuillez noter que BIC exerce activement et pleinement ses
                                droits de propriété intellectuelle avec toute la rigueur de la loi.</p>
                            <p>BIC fera tous les efforts raisonnables pour inclure de l'information exacte et à jour sur
                                le site, mais BIC ne fait aucune garantie ou représentation quant à l'exactitude
                                (expressément ou implicitement) de l'information fournie, ni à la disponibilité, à la
                                fiabilité, à l'intégralité et à la mise à jour de tout contenu ou que ledit contenu soit
                                exempt de bogues, d'erreurs, de défauts ou d'omissions ou qu'il soit adapté à un usage
                                particulier. Toute confiance que vous témoignez à l'information sur ce site est à vos
                                propres risques, et nous pouvons suspendre ou bloquer le fonctionnement du site en tout
                                temps et à notre discrétion. Rien dans les présentes conditions ne doit avoir des effets
                                préjudiciables sur tout droit statutaire obligatoire ou sur vos droits statutaires. Le
                                contenu du site est fourni uniquement à titre d'information générale et dans le but de
                                vous informer sur nous et sur nos produits, actualités, offres spéciales et services
                                ainsi que sur d'autres sites Web pouvant vous intéresser.</p>
                            <p>Tous les utilisateurs conviennent que tout accès et toute utilisation du site et de son
                                contenu sont à vos propres risques. Ni BIC ni aucune partie impliquée dans la création,
                                la production ou la livraison du site ne saurait être tenue responsable de tous dommages
                                directs, accessoires, consécutifs, indirects ou de tous dommages-intérêts punitifs
                                découlant de l'accès au site, de son utilisation ou de l'impossibilité de l'utiliser, ou
                                toutes erreurs ou omissions dans son contenu.</p>
                            <p>DANS LA MESURE PERMISE PAR LA LOI APPLICABLE, LE SITE AINSI QUE TOUS LES RENSEIGNEMENTS
                                QU'IL CONTIENT OU QUI SONT ACCESSIBLES À PARTIR DU SITE SONT FOURNIS «&nbsp;TEL QUEL&nbsp;»
                                ET «&nbsp;TEL QUE DISPONIBLE&nbsp;» ET SANS AUCUNE REPRÉSENTATION, GARANTIE OU CONDITION
                                DE QUELQUE NATURE QUE CE SOIT, QU'ELLE SOIT EXPRESSE OU IMPLICITE. TOUTES LES
                                CONDITIONS, REPRÉSENTATIONS ET GARANTIES, QU'ELLES SOIENT EXPRESSES, IMPLICITES OU
                                STATUTAIRES OU AUTRES, SONT PAR LES PRÉSENTES DÉCLINÉES DANS TOUTE LA MESURE PERMISE PAR
                                LA LOI.</p>
                            <p>SANS RESTREINDRE LA PORTÉE GÉNÉRALE DE CE QUI PRÉCÈDE, BIC NE FAIT AUCUNE REPRÉSENTATION
                                OU GARANTIE QUE&nbsp;: (I) LE SITE SERA COMPATIBLE AVEC VOTRE ORDINATEUR OU VOS
                                LOGICIELS; (II) LE SITE SERA TOUJOURS DISPONIBILITÉ OU SON FONCTIONNEMENT SERA
                                ININTERROMPU ET EXEMPT DE TOUTE ERREUR; (III) L'UTILISATION DU SITE, Y COMPRIS MAIS SANS
                                S'Y LIMITER, LA NAVIGATION SUR LE SITE ET LE TÉLÉCHARGEMENT DE SON CONTENU SERA EXEMPTE
                                DE VIRUS, CHEVAUX DE TROIE, VERS INFORMATIQUES OU AUTRES ÉLÉMENTS DESTRUCTIFS OU
                                NUISIBLES; (IV) LA TRANSMISSION DE RENSEIGNEMENTS VERS ET EN PROVENANCE DU SITE SERA
                                SÉCURITAIRE; (V) L'UTILISATION DU SITE NE VIOLERA AUCUN DROIT (Y COMPRIS MAIS SANS S'Y
                                LIMITER, DES DROITS DE PROPRIÉTÉ INTELLECTUELLE) DE QUICONQUE; OU (VI) L'UTILISATION DU
                                SITE N’ENDOMMAGERA PAS VOS SYSTÈMES INFORMATIQUES, LOGICIELS OU FICHIERS
                                ÉLECTRONIQUES. </p>
                            <p>BIC ne fait aucune garantie ou représentation concernant tout site Web qui n'appartient
                                pas à BIC auquel vous pouvez accéder. BIC n'a aucun contrôle sur les hyperliens vers les
                                sites Web de BIC qui ont été établis par des tiers. Lorsque vous accédez à un site Web
                                qui n'appartient pas à BIC, soyez conscient que cet autre site est indépendant de BIC.
                                BIC ne peut pas surveiller ou examiner le contenu de tous les sites Web et n'assume
                                aucune responsabilité ou obligation découlant du contenu de ces pages hors-site.</p>
                            <p>En outre, BIC n'avalise ni n’accepte aucune responsabilité pour le contenu ou
                                l'utilisation d'un site Web qui a établi un hyperlien avec le site Web de BIC. Nous
                                n'avons aucun contrôle sur les pratiques en matière de respect de la vie privée d'autres
                                sites qui ont établi un lien avec le site de BIC. Vous devriez passer en revue la
                                politique de confidentialité de BIC et celle de tout autre site lié au site BIC. Il
                                incombe à chaque utilisateur de prendre toutes les précautions nécessaires pour
                                s’assurer que son utilisation d'Internet n'inclut pas de matériel offensant. En suivant
                                des hyperliens à d'autres pages hors-site, vous naviguez à vos propres risques.</p>
                            <p>Pour les utilisateurs qui ne résident pas dans la province de Québec, les présentes
                                conditions sont régies et interprétées par les lois en vigueur dans la province de
                                l'Ontario. Pour les utilisateurs qui résident dans la province de Québec, ces conditions
                                sont régies et interprétées par les lois en vigueur dans la province de Québec. Les
                                présentes conditions portent la date mentionnée ci-dessous. Aucune modification de ces
                                conditions n’est valable ou n'a aucun effet sauf si convenu par écrit de notre part.
                                Nous nous réservons le droit de modifier lesdites conditions de temps en temps. Nous
                                afficherons toutes nouvelles conditions sur le site; en continuant d'accéder au site et
                                de l'utiliser suite à de telles modifications, vous acceptez d'être lié par toute
                                modification faite par nous. Il vous incombe de consulter ces conditions de temps en
                                temps pour vérifier de telles variations.</p>
                            <p>Si l'une quelconque des dispositions dans ces conditions est jugée nulle ou non
                                exécutoire par un tribunal compétent, ladite disposition sera appliquée dans toute la
                                mesure permise par la loi et les autres dispositions demeureront en vigueur et de plein
                                effet. La non-exécution ou la renonciation à une disposition des présentes conditions ne
                                peuvent être considérées comme une renonciation ultérieure ou continue à ladite
                                disposition ou à une autre disposition des présentes. Ces conditions vous lient, ainsi
                                que vos héritiers, vos exécuteurs testamentaires, vos bénéficiaires, vos successeurs et
                                vos ayants droit, et vous ne pouvez céder cette entente à toute autre partie sans notre
                                accord écrit préalable, lequel peut être refusé à notre seule et absolue discrétion.</p>
                            <h3>Conditions générales touchant les soumissions au site
                                BICFightForYourWrite.ca&nbsp;:</h3>
                            <p><strong>1. Vous êtes responsable de ce que vous affichez sur le site.</strong> Tous les
                                vidéos, photographies, commentaires et/ou publications de contenu de blogue ou
                                soumissions à BIC sont l'entière responsabilité du fournisseur du contenu et le
                                fournisseur assume toute responsabilité, obligation et blâme pour tout libelle, litige
                                ou poursuite découlant de l’affichage de tous vidéos, photographies, commentaires et/ou
                                publications ou soumissions à BIC par le fournisseur et/ou de toute communication
                                verbale et/ou écrite dans et/ou comme conséquence directe de toute communication verbale
                                et/ou écrite dans un commentaire et/ou contenu affiché de quelque nature que ce soit.
                            </p>
                            <p><strong>2. BIC vous demande de ne pas afficher tout contenu qui pourrait être jugé comme
                                    offensant par une autre personne.</strong> Il est vous interdit de publier ou de
                                soumettre à BIC tout contenu auquel vous n'avez pas les droits et/ou qui est calomnieux,
                                diffamatoire, insultant, menaçant, obscène, harcelant, abusif ou discriminatoire, qui
                                viole le droit à la vie privée de tout tiers, qui enfreint toute autre loi locale,
                                provinciale/territoriale, fédérale ou internationale applicable ou qui est à tout le
                                moins inapproprié, selon ce qui est déterminé par BIC à sa seule et absolue discrétion.
                                Vous devez avoir obtenu le consentement de toute personne qui est mentionnée ou
                                identifiée dans tout contenu que vous soumettez et/ou le consentement de son parent ou
                                tuteur légal s’il s’agit d’un mineur. En outre, vous n'avez pas le droit d’afficher ou
                                de soumettre à BIC tout contenu qui dégrade autrui sur la base du sexe, de la race, de
                                la classe sociale, de l'ethnicité, de l'origine nationale, de la religion, de la
                                préférence sexuelle, d'un handicap ou de toute autre autre catégorie. BIC se réserve le
                                droit de supprimer, de modifier ou de réviser tout contenu affiché de quelque nature que
                                ce soit et de rejeter tout contenu soumis qui s’est avéré offensant et/ou qui ne se
                                conforme pas aux conditions du présent site Web. De même, BIC se réserve le droit de
                                résilier tout accès à ce site Web, à l’un quelconque de ses murs, blogues et/ou autres
                                sites Web ou de prendre des mesures protectrices qu’elle juge nécessaires, à sa seule et
                                absolue discrétion. </p>
                            <p><strong>3. Affichage de tout contenu rédigé, de photographies et de vidéos. </strong>
                                Vous êtes en droit d’afficher ou de soumettre à BIC uniquement du contenu rédigé, des
                                photographies ou des vidéos que vous avez créés vous-même et auxquels vous détenez les
                                pleins droits. BIC se réserve le droit de supprimer, de modifier ou de rejeter tout
                                contenu rédigé et/ou toutes photographies et/ou tous vidéos soumis qui ne se conforment
                                pas aux présentes conditions. </p>
                            <p><strong>4. Propriété et confidentialité de l'information.</strong> Vous êtes en droit
                                d’afficher ou de soumettre à BIC uniquement de l'information conforme, et qui ne
                                contrevient pas, à toutes lois applicables touchant les marques commerciales, noms
                                commerciaux, robes de commerce,&nbsp; secrets commerciaux, copyrights, brevets ou lois
                                applicables relatives à la protection de la vie privée et autres lois relatives à la
                                propriété intellectuelle. Vous certifiez en outre que l'information que vous affichez ou
                                soumettez à BIC n'enfreindra ni ne violera les droits de propriété intellectuelle de
                                toute autre partie. Tout contenu que vous affichez sur le site BICFightForYourWrite.ca
                                ou que vous soumettez à BIC est fourni par vous À TITRE NON CONFIDENTIEL et BIC n'a
                                aucune obligation de garder confidentielle une telle information, de s'abstenir d’en
                                faire usage, ou de vous indemniser pour la réception ou l’usage d’une telle information.
                                La société BIC sera libre d’utiliser sans restriction à quelque fin que ce soit toute
                                information que vous affichez sur le site BICFightForYourWrite.ca ou que vous soumettez
                                à BIC. Par les présentes, vous DÉGAGEZ BIC de toute responsabilité concernant toute
                                théorie légale relative à l'utilisation, la modification, la vente ou la divulgation de
                                toute information. Veuillez noter que toute information que vous choisissez de divulguer
                                ou d’afficher dans la section publique du site Web BICFightForYourWrite.ca peut être
                                diffusée au grand public et peut être visionnée par d’autres visiteurs sur le site. Vous
                                devez faire preuve de prudence lorsque vous décidez de divulguer vos renseignements
                                personnels. Une fois que votre information personnelle est affichée sur le site, il vous
                                sera impossible de modifier ou de supprimer tout élément de telle information publiée.
                            </p>
                            <p><strong>5.</strong> <strong>Nous pourrions vous demander de nous fournir vos nom et
                                    adresse électronique lors de toute soumission de contenu de quelque nature que ce
                                    soit.</strong> Sur tout site BICFightForYourWrite.ca, on identifie les utilisateurs
                                par leur nom et par conséquent, nous vous suggérons de vous identifier uniquement par
                                votre prénom. Votre adresse électronique ne sera pas publiée, mais il est possible que
                                nous nous en servions afin de vous contacter à l’égard de vos soumissions, affichages
                                et/ou commentaires. Pour de plus amples renseignements, veuillez consulter notre
                                Déclaration sur la protection des renseignements personnels sur le site
                                BICFightForYourWrite.ca.</p>
                            <p><strong>6. Défense d’afficher tout contenu préjudiciable</strong>. Vous acceptez de ne
                                pas télécharger, afficher, envoyer par courriel ou autrement transmettre toute
                                information qui contient du contenu nuisible, y compris mais sans s'y limiter, des
                                virus, chevaux de Troie, vers informatiques, bombes à retardement, robots d'annulation,
                                logiciels espion ou d’autres fichiers, progiciels ou technologies conçus ou prévus pour
                                perturber, interrompre, endommager, détruire ou limiter le fonctionnement de tout
                                logiciel ou matériel informatique ou matériel de télécommunications ou autrement
                                exécuter des actions malveillantes.</p>
                            <p><strong>7. Vous octroyez une licence à BIC.</strong> En utilisant ce site et en
                                fournissant à BIC tout contenu ou information, vous&nbsp;: i) octroyez à BIC une licence
                                mondiale, perpétuelle, irrévocable, cessible, sous-licenciable, exempte de redevances,
                                non exclusive et sans restriction pour copier, reproduire, adapter, transmettre, éditer,
                                modifier ou autrement utiliser, exposer publiquement, diffuser, traduire et créer des
                                compilations ou d'autres œuvres dérivées à partir de tel contenu ou information en tout
                                ou en partie (dans tout format ou support) que vous affichez, téléchargez ou autrement
                                soumettez sur ou par l’entremise du site; et ii) renoncez aux droits moraux sur et à
                                tout contenu ou information que vous affichez, téléchargez ou autrement soumettez sur ou
                                par l’entremise du site, en faveur de BIC. Pour plus de certitude, ceci signifie que,
                                entre autres, BIC a le droit d’utiliser toutes les idées que vous soumettez (y compris
                                les idées sur nos produits, services, publications ou campagnes publicitaires) de
                                quelque façon que ce soit, et ce, sans préavis ni obligation de quelque nature envers
                                vous.</p>
                            <p><strong>8. Notification et procédure d'allégation de violation des droits.</strong> Vous
                                acceptez de ne pas télécharger, afficher, ni autrement transmettre toute communication
                                ou tout contenu de quelque nature que ce soit enfreignant les droits de toute personne
                                ou entité. Si vous croyez que tout matériel disponible sur le présent site viole tout
                                droit d'auteur ou autre droit de propriété, vous devez en aviser BIC à l’aide de
                                l’onglet ou lien Nous joindre sur notre site et fournir une description détaillée du
                                matériel faisant l'objet de la prétendue infraction.</p>
                            <p>Juillet 2015</p>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="contents">
                    <h3>Terms and Conditions</h3>

                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                            <p>We hope you’ll find our website useful and informative. Please visit often and tell your
                                friends about us. All we ask in return is that you abide by the Terms and Conditions
                                that follow. Please read them carefully, because when you use our site, you
                                automatically agree to them. </p>
                            <p>BIC Inc. (“BIC”) maintains its websites as a service to the Internet community.&nbsp;These
                                terms of use explain how you may use this website (the “Site”). References in these
                                terms to the Site includes the following website: BICFightForYourWrite.ca and all
                                associated web pages. Access to and use of BICFightForYourWrite.ca is subject to the
                                terms and conditions set forth herein and all applicable laws. BIC may revise these
                                terms and conditions from time to time by updating this posting. You should read these
                                terms and conditions carefully before using the Site. By accessing or using this Site or
                                otherwise indicating your consent, you agree to be bound by these terms and conditions
                                and the documents referred to in them. If you do not agree with or accept any of these
                                terms, you should cease using the Site immediately. </p>
                            <p>These terms include our Privacy Policy, available at BICFightForYourWrite.ca, which shall
                                be subject to these terms in the event of any conflict or inconsistency.&nbsp; This Site
                                is intended for and directed to residents of Canada over the age of majority in their
                                jurisdiction of residence.&nbsp; We seek to make this Site as accessible as
                                possible. </p>
                            <p>The Site is for your personal and non-commercial use only. As a condition of your use of
                                the Site, you agree: </p>
                            <ol style="list-style:lower-alpha;">
                                <li>not to use the Site for any purpose that is unlawful under applicable law, or
                                    prohibited by these terms and conditions;
                                </li>
                                <li>not to make available to any third party or otherwise publish, distribute, download,
                                    modify, edit, reuse, repost, reproduce, transmit, perform, display, deep-link,
                                    create derivative works from or exploit in any way the Site or its text, images,
                                    video, audio or other multimedia content, software or other information or material
                                    submitted to, subsisting on or accessible from the Site (“Content”) except as
                                    permitted by us under these terms or as expressly provided under applicable law;
                                </li>
                                <li>not to post or transmit any offensive, harmful, unlawful, threatening, libelous,
                                    defamatory, obscene, abusive, hateful, inflammatory, discriminatory, pornographic or
                                    profane material or any material that could constitute or encourage conduct that
                                    would be considered a criminal offense, give rise to civil liability, or would
                                    otherwise violate the law, all as determined by BIC in its sole and absolute
                                    discretion;
                                </li>
                                <li>not to use the Site to distribute viruses or malware or other similar harmful
                                    software code;
                                </li>
                                <li>not to represent or suggest that we endorse any other business, product or service
                                    unless we have separately agreed to do so in writing; and
                                </li>
                                <li>that you are solely responsible for all costs and expenses you may incur in relation
                                    to your use of the Site.
                                </li>
                            </ol>
                            <p>We reserve the right to prevent or suspend your access to the Site if you do not comply
                                with any part of these terms and conditions or any applicable law and to take such
                                action as we deem appropriate in cases where BIC websites are used to disseminate
                                materials in contravention of the these terms and conditions. </p>
                            <p>This Site and all intellectual property rights in the Site (including without limitation
                                any Content) are owned by BIC, our affiliates, subsidiaries and related companies and/or
                                our licensors or joint venture partners. BIC and our licensors reserve all our
                                intellectual property rights (which include without limitation all copyright,
                                trademarks, domain names, design rights, database rights, patents and all other
                                intellectual property rights of any kind) whether registered or unregistered anywhere in
                                the world.&nbsp; </p>
                            <p>Nothing contained on the Site shall be construed as granting, by implication, estoppel or
                                otherwise, any license or right to use any trademark without our prior written
                                permission and nothing in these terms and conditions grants you any rights in the Site
                                and/or the Content other than as necessary to enable you to access the Site. You agree
                                not to, nor attempt to, to circumvent or delete any intellectual property notices
                                contained on the Site and in particular in any digital rights or other security
                                technology embedded or contained within any Site Content.&nbsp; The distribution,
                                downloading, editing, modification, reuse, reproduction, reposting, transmission,
                                performance, display or other uses of these trademarks or any other materials, except as
                                permitted herein, is expressly prohibited and may be in violation of copyright law,
                                trademark law, the law of slander or libel, the law of privacy and publicity, and
                                communications regulations and statutes. Further, please be advised that BIC actively
                                and aggressively enforces its intellectual property rights to the fullest extent of the
                                law. </p>
                            <p>BIC will use reasonable efforts to include accurate and up-to-date information on the
                                Site, but BIC makes no warranties or representations as to its accuracy (whether
                                expressly or by implication) or that any Content is or remains available accurate,
                                complete and up to date, free from bugs, errors or omissions or fit or suitable for any
                                purpose.&nbsp; Any reliance you may place on the information on this Site is at your own
                                risk and we may suspend or terminate operation of the Site, or any portion of the Site,
                                at any time at our sole discretion. Nothing in these terms and conditions shall operate
                                to prejudice any mandatory statutory requirement or your statutory rights. Content on
                                the Site is provided for your general information purposes only and to inform you about
                                us and our products and news, features, services and other websites, which may be of
                                interest. </p>
                            <p>All users agree that all access and use of the Site and the content thereof is at your
                                own risk. Neither BIC nor any party involved in creating, producing or delivering the
                                Site shall be liable for any direct, incidental, consequential, indirect or punitive
                                damages arising out of your access, use or inability to use the Site, or any errors or
                                omissions in the content thereof. </p>
                            <p>TO THE EXTENT PERMITTED BY THE APPLICABLE LAW, THE SITE AND ALL INFORMATION CONTAINED ON
                                OR ACCESSED FROM THE SITE IS PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS, AND
                                WITHOUT ANY REPRESENTATIONS, WARRANTIES OR CONDITIONS OF ANY KIND, WHETHER EXPRESS OR
                                IMPLIED. ALL CONDITIONS, REPRESENTATIONS AND WARRANTIES, WHETHER EXPRESS, IMPLIED,
                                STATUTORY OR OTHERWISE ARE HEREBY DISCLAIMED TO THE FULLEST EXTENT PERMITTED BY
                                LAW. </p>
                            <p>WITHOUT LIMITING THE GENERALITY OF THE FOREGOING, BIC MAKES NO REPRESENTATION OR WARRANTY
                                THAT: (I) THE SITE WILL BE COMPATIBLE WITH YOUR COMPUTER AND SOFTWARE; (II) THE SITE
                                WILL BE AVAILABLE OR WILL FUNCTION WITHOUT INTERRUPTION OR ERROR; (III) THE USE OF THE
                                SITE, INCLUDING, WITHOUT LIMITATION, THE BROWSING AND DOWNLOADING OF ANY INFORMATION,
                                WILL BE FREE OF ANY VIRUSES, TROJAN HORSES, WORMS OR OTHER DESTRUCTIVE, INTRUSIVE OR
                                DISRUPTIVE COMPONENTS; (IV) THE TRANSMISSION OF INFORMATION TO AND FROM THE SITE WILL BE
                                SECURE; (V) THE USE OF THE SITE WILL NOT INFRINGE THE RIGHTS (INCLUDING, WITHOUT
                                LIMITATION, INTELLECTUAL PROPERTY RIGHTS) OF ANY PERSON; OR (VI) THE USE OF THE SITE
                                WILL NOT CAUSE ANY DAMAGE TO YOUR COMPUTER SYSTEMS, SOFTWARE OR ELECTRONIC FILES. </p>
                            <p>COMMENTS OR OPINIONS EXPRESSED ON THE SITE ARE THOSE OF THE RESPECTIVE SITE USERS ONLY.
                                THE VIEWS EXPRESSED ON THE SITE AND IN USER SUBMITTED CONTENT DO NOT NECESSARILY
                                REPRESENT OR REFLECT THE VIEWS OF BIC. BIC IS NOT RESPONSIBLE FOR, AND DISCLAIMS ALL
                                LIABILITY IN RELATION TO, ANY USER CONTENT POSTED, UPLOADED OR OTHERWISE SUBMITTED TO OR
                                THROUGH THE SITE.</p>
                            <p>BIC makes no warranties or representations about any non-BIC website which you may
                                access.&nbsp; BIC has no control over links made to BIC websites by third parties. When
                                you access a non-BIC website, please understand that it is independent from BIC. BIC
                                cannot monitor or review the content of all websites and assumes no responsibility or
                                liability arising from the content of such off-site pages. </p>
                            <p>Furthermore, BIC does not endorse or accept any responsibility for the content or the use
                                of a third-party website that has linked to the BIC website or that is linked from the
                                BIC Website. We have no control over the privacy practices of such websites. You should
                                review BIC’s Privacy Policy and the privacy policy of any other website you visit. It is
                                up to each user to take whatever precautions are necessary to ensure Internet use which
                                is free of offensive materials. Your linking to any off-site pages is at your own
                                risk. </p>
                            <p>For users who are not individuals resident in the province of Quebec, these terms and
                                conditions shall be construed in accordance with and governed by the laws in effect
                                within the Province of Ontario.&nbsp;For individuals resident in the province of Quebec,
                                these terms and conditions shall be construed in accordance with and governed by the
                                laws in effect within the Province of Quebec. These terms and conditions are dated as of
                                the date set out below. No changes to these terms are valid or have any effect unless
                                agreed by us in writing. We reserve the right to vary these terms and conditions from
                                time to time. Our new terms will be displayed on the Site and by continuing to use and
                                access the Site following such changes, you agree to be bound by any variation made by
                                us. It is your responsibility to check these terms and conditions from time to time to
                                verify such variations.</p>
                            <p>If any provision of these terms and conditions is held invalid or unenforceable by any
                                court having competent jurisdiction, such provision shall be enforced to the maximum
                                extent permitted by law, and the remaining provisions of these terms and conditions
                                shall continue in full force and effect. No failure to exercise or waiver of any
                                provision of these terms and conditions shall be deemed a further or continuing waiver
                                of such provision or any other provision of these terms and conditions. These terms and
                                conditions are binding upon you, your heirs, executors, beneficiaries, successors and
                                assigns and you may not assign this agreement to any other party without our prior
                                written consent, which consent may be withheld in our sole and absolute discretion.</p>
                            <p><strong>General Terms and Conditions of Submissions to </strong><strong>BICFightForYourWrite.ca</strong><strong>: </strong>
                            </p>
                            <p><strong>1. You are responsible for what you post.</strong> All video, photographs,
                                comments and/or blog postings and submissions to BIC are the sole responsibility of
                                their submitter and the submitter will take full responsibility, liability, and blame
                                for any libel, litigation or claims that result from the submitter's video, photograph,
                                comments and/or postings, submissions to BIC, and/or something spoken and/or written in
                                or as a direct result of something spoken and/or written in a comment and/or posting of
                                any kind. </p>
                            <p><strong>2. BIC requests that you do not post anything that could be offensive to
                                    others.</strong> You may not post or submit to BIC content that you do not have
                                rights to and/or that is libelous, defamatory, insulting, threatening, obscene,
                                harassing, abusive, discriminatory, that violates a third party's right to privacy, that
                                violates any other applicable local, provincial/territorial, federal or international
                                law, or is otherwise inappropriate, all as determined by BIC in its sole and absolute
                                discretion. You must have consent from any person who appears in or is identified in any
                                content you submit and/or the consent of their parent or legal guardian if they are a
                                minor. Furthermore, you may not post or submit to BIC content that degrades others on
                                the basis of gender, race, class, ethnicity, national origin, religion, sexual
                                preference, disability or other classification. BIC reserves the right to remove, edit,
                                or modify, any and all postings and reject submissions that are found to be offensive
                                and/or that do not comply with the terms and conditions of this Site. BIC also reserves
                                the right to terminate access to this Site, or any of its walls, blog(s), and/or
                                websites or take other protective steps as it deems necessary in its sole and absolute
                                discretion. </p>
                            <p><strong>3. Posting of writings, photographs / videos. </strong>You may only post or
                                submit to BIC for posting writings, photographs and/or videos of content that you have
                                created and have full rights to. BIC reserves the right to remove, edit, or modify any
                                all writings, photographs and/or videos and reject submissions that do not comply with
                                these terms and conditions. </p>
                            <p><strong>4. Ownership and confidentiality of information.</strong> You may only post or
                                submit to BIC information in accordance with, and not in violation of, applicable
                                trademark, trade name, trade dress, trade secret, service mark, copyright, patent, right
                                of privacy, and other intellectual property laws. You further certify that the
                                information you post or submit to BIC will not infringe upon or violate the intellectual
                                property rights of any other party. Anything you post to the BICFightForYourWrite.ca
                                website or submit to BIC is provided by you on a NON-CONFIDENTIAL BASIS, and BIC has no
                                obligation to keep such information confidential, refrain from using such information,
                                or to compensate you for the receipt or use of such information. BIC is free to use, for
                                any purpose whatsoever, any information you post on a BICFightForYourWrite.ca website or
                                submit to BIC. You hereby RELEASE BIC from any liability under any legal theory in
                                connection with the use, modification, sale or disclosure of any information. Please
                                remember that any information that you choose to disclose or post on a public area of
                                the BICFightForYourWrite.ca website may appear publically on the Site, and may be viewed
                                by other visitors to the Site. You should exercise caution when deciding to disclose
                                your personal information. Once posted, you cannot change or remove any public postings
                            </p>
                            <p><strong>5. We may ask for your name and e-mail address when you post a submission of any
                                    kind.</strong> On a BICFightForYourWrite.ca website, users are identified by name
                                and, as such, we suggest designating only your first name. Your e-mail address will not
                                be published but will be used to possibly contact you in relation to your submissions,
                                postings and/or comment(s). Please view our privacy policy on BICFightForYourWrite.ca
                                for more detail. </p>
                            <p><strong>6. No posting of harmful content.</strong> You agree that you will not upload,
                                post, e-mail or otherwise transmit information that contains harmful content, including,
                                without limitation, viruses, Trojan horses, worms, time bombs, cancel bots, spy-ware, or
                                any other files, software programs, or technology that is designed or intended to
                                disrupt, interrupt, damage, destroy, intercept, or limit the functionality of any
                                computer software or hardware or telecommunications equipment or otherwise perform a
                                malicious action. </p>
                            <p><strong>7. You License to BIC.</strong> By using the Site and providing BIC with any
                                content or information, you: (i) grant to BIC a world-wide, perpetual, irrevocable,
                                transferable, sub-licensable, royalty-free, non-exclusive, and unrestricted license to
                                copy, reproduce, adapt, transmit, edit, modify, or otherwise use, publicly display,
                                distribute, translate and create compilations and derivative works from, any and all
                                content or information (in any format or media) that you post on, upload or otherwise
                                submit to or through, the Site; and (ii) waive all moral rights in and to all content or
                                information that you post on, upload or otherwise submit to or through, the Site in
                                favour of BIC.&nbsp; For greater certainty, this means that, among other things, BIC has
                                the right to use any and all ideas you submit (including ideas about our products,
                                services, publications or advertising campaigns) in any manner that we choose, without
                                any notice or obligation to you whatsoever.</p>
                            <p><strong>8. Notice and Procedure for making Infringement Claims.</strong> You agree that
                                you will not upload, post or otherwise transmit any communications or content of any
                                type that infringe or violate any rights of any party. If you believe any material
                                available via this Site infringes a copyright or other right, you should notify BIC
                                using the Contact Us tab or link on our Site and provide a detailed description of the
                                material claimed to be infringing.&nbsp; </p>
                            <p>July 2015</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<!-- end content-wrapper -->