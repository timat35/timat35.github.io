

	function changeArticleMaro(article, mobil) {
		
		$("#menu_maro_1").removeClass("activeMobil");
		$("#menu_maro_2").removeClass("activeMobil");
		$("#menu_maro_3").removeClass("activeMobil");
		$("#menu_maro_4").removeClass("activeMobil");
		$("#menu_maro_5").removeClass("activeMobil");
		$("#menu_maro_6").removeClass("activeMobil");
		$("#menu_maro_7").removeClass("activeMobil");
		
		$("#besace_btnCouleur").addClass("noDisplay");
		$("#cabas_btnCouleur").addClass("noDisplay");
		$("#bandou_btnCouleur").addClass("noDisplay");
		$("#porteMonnaie_btnCouleur").addClass("noDisplay");
		
				
		var source4 = "", // to get default source4 5 6 etc...
			source5 = "",
			source6 = "",
			source7 = "",
			source8 = "",
			source9 = "",
			source10 = "",
			source11 = "";

		
		if (article == 'portemonnaie') {
			
			var source1 = "/media/photo-maroquinerie/portemonnaie-multiple.jpg",
				source2 = "/media/photo-maroquinerie/portemonnaie-jaune-rouge-profil.jpg",
				source3 = "/media/photo-maroquinerie/portemonnaie-jaune-rouge-interieur.jpg",
				articleTitle= "Porte-monnaie",
				articleDescription="Fermeture \340 pression, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 10,5cm X 6,5cm.";
			
			
			$("#menu_maro_2").addClass("activeMobil");
			$("#porteMonnaie_btnCouleur").removeClass("noDisplay");
			
		} else if (article == 'portemonnaie_3poche') {
			var source1 = "/media/photo-maroquinerie/porte-monnaie-3-poche-multiple.jpg",
				source2 = "/media/photo-maroquinerie/porte-monnaie-3-poche.jpg",
				source3 = "/media/photo-maroquinerie/porte-monnaie-3-poche-ouvert.jpg",
				articleTitle= "Porte-monnaie 3 poches",
				articleDescription="Fermeture \340 pression, cuir vachette ou veau.",
				articleDimension="Dimensions: 10,5cm X 7cm.";	
			
			$("#menu_maro_3").addClass("activeMobil");
			$("#porteMonnaie_btnCouleur").removeClass("noDisplay");

		} else if (article == 'portemonnaie_demiLune') {
			var source1 = "/media/photo-maroquinerie/porte-monnaie-demi-lune-multiple.jpg",
				source2 = "/media/photo-maroquinerie/porte-monnaie-demi-lune.jpg",
				source3 = "/media/photo-maroquinerie/porte-monnaie-demi-lune-ouvert-2.jpg",
				articleTitle= "Porte-monnaie Demi-lune",
				articleDescription="Double emplacement, Fermeture \340 pression, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 10,5cm X 8cm.";	
			
		$("#menu_maro_4").addClass("activeMobil");
		$("#porteMonnaie_btnCouleur").removeClass("noDisplay");
			
		} else if (article == 'portefeuille') {
			var source1 = "/media/photo-maroquinerie/portefeuille-multiple-couleur.jpg",
				source2 = "/media/photo-maroquinerie/portefeuille-rouge-mauve.jpg",
				source3 = "/media/photo-maroquinerie/portefeuille-bleue-marine-doublure.jpg",
				source4 = "/media/photo-maroquinerie/portefeuille-jaune.jpg",
				source5 = "/media/photo-maroquinerie/portefeuille-couleur.jpg",
				source6 = "/media/photo-maroquinerie/portefeuille-bleu.jpg",
				source7 = "/media/photo-maroquinerie/portefeuille-marron.jpg",
				source8 = "/media/photo-maroquinerie/portefeuille-vert.jpg",
				source9 = "/media/photo-maroquinerie/portefeuille-noir.jpg",
				source10 = "/media/photo-maroquinerie/portefeuille-rouge.jpg",
				source11 = "/media/photo-maroquinerie/portefeuille-marron-fonce.jpg",
				articleTitle= "Portefeuille",
				articleDescription="Fermeture \340 pression, \340 l'int\350rieur 2 emplacements pour cartes et 4 poches dont une zipp\351e pour porte monnaie, format passeport, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 15,5cm X 10cm.";	
			
			$("#menu_maro_1").addClass("activeMobil");
				
		} else if (article == 'portechequier') {
			var source1 = "/media/photo-maroquinerie/portechequier-bleue-marine.jpg",
				source2 = "/media/photo-maroquinerie/portechequier-bleue-marine-marron.jpg",
				source3 = "/media/photo-maroquinerie/portechequier-bleue-doublure.jpg",
				articleTitle= "Porte-ch\351quier",
				articleDescription="Fermeture \340 pression, \340 l'int\350rieur 3 emplacements pour cartes et 4 poches dont une double zipp\351e pour porte monnaie et billets, format ch\351quier, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 20,5cm X 11,5cm.";
				
			$("#menu_maro_5").addClass("activeMobil");
				
		} else if (article == 'etui_lunette') {
			var source1 = "/media/photo-maroquinerie/etui-lunette-jaune-face.jpg",
				source2 = "/media/photo-maroquinerie/etui-lunette-jaune-bleu.jpg",
				source3 = "/media/photo-maroquinerie/etui-lunette-jaune-doublure.jpg",
				articleTitle= "Etui \340 lunettes",
				articleDescription="Fermeture lani\350re \340 enrouler et nouer, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 15cm X 6cm.";
			
			$("#menu_maro_6").addClass("activeMobil");
				
					
		} else if (article == 'pochette') {
			var source1 = "/media/photo-maroquinerie/pochette-de-face.jpg",
				source2 = "/media/photo-maroquinerie/pochette-marron-jaune.jpg",
				source3 = "/media/photo-maroquinerie/pochette-multiples-ouvert.jpg",
				articleTitle= "Pochette",
				articleDescription="Format pour blague \340 tabac ou autre, fermeture \340 pression, cuir vachette ou veau, finition biais en tissu.",
				articleDimension="Dimensions: 15.5cm X 9cm.";
			
			$("#menu_maro_7").addClass("activeMobil");
				
					
		}

			
		var	source1_medium = source1.slice(0,-4) + "-320.jpg",
			source2_medium = source2.slice(0,-4) + "-320.jpg",
			source3_medium = source3.slice(0,-4) + "-320.jpg",
			source1_low = source1.slice(0,-4) + "-100.jpg",
			source2_low = source2.slice(0,-4) + "-100.jpg",
			source3_low = source3.slice(0,-4) + "-100.jpg",
			source4_low = source4.slice(0,-4) + "-100.jpg",
			source5_low = source5.slice(0,-4) + "-100.jpg",
			source6_low = source6.slice(0,-4) + "-100.jpg";
			source7_low = source7.slice(0,-4) + "-100.jpg";
			source8_low = source8.slice(0,-4) + "-100.jpg";
			source9_low = source9.slice(0,-4) + "-100.jpg";
			source10_low = source10.slice(0,-4) + "-100.jpg";
			source11_low = source11.slice(0,-4) + "-100.jpg";
			
		if (document.getElementById("fancy_1").href != source1) {
			
			document.getElementById("fancy_1").href = source1;
			document.getElementById("fancy_2").href = source2;
			document.getElementById("fancy_3").href = source3;
			document.getElementById("fancy_4").href = source4;
			document.getElementById("fancy_5").href = source5;
			document.getElementById("fancy_6").href = source6;
			document.getElementById("fancy_7").href = source7;
			document.getElementById("fancy_8").href = source8;
			document.getElementById("fancy_9").href = source9;
			document.getElementById("fancy_10").href = source10;
			document.getElementById("fancy_11").href = source11;
			
			document.getElementById("fancy_r1").href = source1;
			document.getElementById("fancy_r2").href = source2;
			document.getElementById("fancy_r3").href = source3;
			document.getElementById("fancy_r4").href = source4;
			document.getElementById("fancy_r5").href = source5;
			document.getElementById("fancy_r6").href = source6;
			document.getElementById("fancy_r7").href = source7;
			document.getElementById("fancy_r8").href = source8;
			document.getElementById("fancy_r9").href = source9;
			document.getElementById("fancy_r10").href = source10;
			document.getElementById("fancy_r11").href = source11;
			

			$("#thumb_img_1").fadeTo(200,0.0, function() {
				  $("#thumb_img_1").attr("src",source1_low);
			  }).fadeTo(400,1);
			$("#thumb_img_2").fadeTo(200,0.0, function() {
				  $("#thumb_img_2").attr("src",source2_low);
			  }).fadeTo(400,1);
			$("#thumb_img_3").fadeTo(200,0.0, function() {
				  $("#thumb_img_3").attr("src",source3_low);
			  }).fadeTo(400,1);
			$("#thumb_img_4").fadeTo(200,0.0, function() {
				  $("#thumb_img_4").attr("src",source4_low);
			  }).fadeTo(400,1);
			$("#thumb_img_5").fadeTo(200,0.0, function() {
				  $("#thumb_img_5").attr("src",source5_low);
			  }).fadeTo(400,1);
			$("#thumb_img_6").fadeTo(200,0.0, function() {
				  $("#thumb_img_6").attr("src",source6_low);
			  }).fadeTo(400,1);
			$("#thumb_img_7").fadeTo(200,0.0, function() {
				  $("#thumb_img_7").attr("src",source7_low);
			  }).fadeTo(400,1);
			$("#thumb_img_8").fadeTo(200,0.0, function() {
				  $("#thumb_img_8").attr("src",source8_low);
			  }).fadeTo(400,1);
			$("#thumb_img_9").fadeTo(200,0.0, function() {
				  $("#thumb_img_9").attr("src",source9_low);
			  }).fadeTo(400,1);
			$("#thumb_img_10").fadeTo(200,0.0, function() {
				  $("#thumb_img_10").attr("src",source10_low);
			  }).fadeTo(400,1);
			$("#thumb_img_11").fadeTo(200,0.0, function() {
				  $("#thumb_img_11").attr("src",source11_low);
			  }).fadeTo(400,1);			  
			

			  
			  
			$("#img_base").fadeTo(200,0.0, function() {
				$("#img_base").attr("src",source2_medium);
			}).fadeTo(400,1);
			  
			  
			
			document.getElementById("fancy_base").href= source2;
			
			document.getElementById("fancy_1").rel = "fancybox";
			document.getElementById("fancy_2").rel = "NO";
			document.getElementById("fancy_3").rel = "fancybox";
			
			$("#thumb_img_1").addClass("borderClass");
			$("#thumb_img_2").addClass("borderClass");
			$("#thumb_img_3").addClass("borderClass");
			
			$("img_base").addClass("borderClass");
			$("#thumb_img_4").addClass("noDisplay");
			$("#thumb_img_5").addClass("noDisplay");
			$("#thumb_img_6").addClass("noDisplay");
			$("#thumb_img_7").addClass("noDisplay");
			$("#thumb_img_8").addClass("noDisplay");
			$("#thumb_img_9").addClass("noDisplay");
			$("#thumb_img_10").addClass("noDisplay");
			$("#thumb_img_11").addClass("noDisplay");
				
			document.getElementById("articleTitle").innerHTML = articleTitle;
			document.getElementById("articleTitleMobil").innerHTML = articleTitle;
			document.getElementById("articleDescription").innerHTML = articleDescription;
			document.getElementById("articleDescriptionMobil").innerHTML = articleDescription;
			document.getElementById("articleDimension").innerHTML = articleDimension;
			document.getElementById("articleDimensionMobil").innerHTML = articleDimension;
				
		}
		
		
		document.getElementById("fancy_4").rel = "NO";
		document.getElementById("fancy_5").rel = "NO";
		document.getElementById("fancy_6").rel = "NO";
		document.getElementById("fancy_7").rel = "NO";
		document.getElementById("fancy_8").rel = "NO";
		document.getElementById("fancy_9").rel = "NO";
		document.getElementById("fancy_10").rel = "NO";
		document.getElementById("fancy_11").rel = "NO";
		
		if (article == 'portefeuille') {
			
		$("#thumb_img_4").removeClass("noDisplay");
		$("#thumb_img_5").removeClass("noDisplay");
		$("#thumb_img_6").removeClass("noDisplay");
		$("#thumb_img_7").removeClass("noDisplay");
		$("#thumb_img_8").removeClass("noDisplay");
		$("#thumb_img_9").removeClass("noDisplay");
		$("#thumb_img_10").removeClass("noDisplay");
		$("#thumb_img_11").removeClass("noDisplay");
		
		document.getElementById("fancy_r1").rel = "fancybox";
		document.getElementById("fancy_r2").rel = "NO";
		document.getElementById("fancy_r3").rel = "NO";
		document.getElementById("fancy_r4").rel = "NO";
		document.getElementById("fancy_r5").rel = "NO";
		document.getElementById("fancy_r6").rel = "NO";
		document.getElementById("fancy_r7").rel = "NO";
		document.getElementById("fancy_r8").rel = "NO";
		document.getElementById("fancy_r9").rel = "NO";
		document.getElementById("fancy_r10").rel = "NO";
		document.getElementById("fancy_r11").rel = "NO";
		
		document.getElementById("fancy_1").rel = "NO";
		document.getElementById("fancy_2").rel = "NO";
		document.getElementById("fancy_3").rel = "fancybox";
		document.getElementById("fancy_4").rel = "fancybox";
		document.getElementById("fancy_5").rel = "fancybox";
		document.getElementById("fancy_6").rel = "fancybox";
		document.getElementById("fancy_7").rel = "fancybox";
		document.getElementById("fancy_8").rel = "fancybox";
		document.getElementById("fancy_9").rel = "fancybox";
		document.getElementById("fancy_10").rel = "fancybox";
		document.getElementById("fancy_11").rel = "fancybox";
		
		
		
			
		}	
		
		
		
		if (article == 'portemonnaie') {
			
		$("#thumb_img_1").removeClass("borderClass");
			
		}	
		
		if (article == 'pochette') {
			
		$("#thumb_img_1").removeClass("borderClass");
			
		}	
		
		if (article == 'portemonnaie_3poche') {
			
		$("#thumb_img_1").removeClass("borderClass");	
		}	
		
		if (article == 'portemonnaie_demiLune') {
			
		$("#thumb_img_1").removeClass("borderClass");	
		$("#thumb_img_3").removeClass("borderClass");	
		}	
		
		if (mobil) {
			
		$("#porteMonnaie_btnCouleur").addClass("noDisplay");
	
		var $body = $( 'body' ),
			$content = $( '#content' ),
			transitionEnd = 'transitionend webkitTransitionEnd otransitionend MSTransitionEnd';
			
		$body.addClass( 'animating' );
		$body.addClass( 'up anim7' );
		$('#toggle-menu').removeClass('noDisplay')
		
		$content.on( transitionEnd, function() {
			$body
			.removeClass( 'animating down up anim7' )
			.removeClass( 'menu-visible anim7' );
		$content.off( transitionEnd );
			});
			
		setTimeout( function(){
				 $body.removeClass( 'animating down up anim7' );
				 $body.removeClass( 'menu-visible anim7' );
				}, 300);			
		}	
	}
	
	function changeArticleSac(article, mobil) {
		
		$("#menu_sac_1").removeClass("activeMobil");
		$("#menu_sac_2").removeClass("activeMobil");
		$("#menu_sac_3").removeClass("activeMobil");
		$("#menu_sac_4").removeClass("activeMobil");
		$("#menu_sac_5").removeClass("activeMobil");
		$("#menu_sac_6").removeClass("activeMobil");
		
		$("#besace_btnCouleur").addClass("noDisplay");
		$("#cabas_btnCouleur").addClass("noDisplay");
		$("#bandou_btnCouleur").addClass("noDisplay");
		$("#porteMonnaie_btnCouleur").addClass("noDisplay");

		if (article == 'sac_noire') {
			
			var source1 = "/media/photo-sac/Sac-besace-noire-face-portefeuille-rouge.jpg",
				source2 = "/media/photo-sac/Sac-besace-noire-face.jpg",
				source3 = "/media/photo-sac/Sac-besace-noire-doublure.jpg",
				articleTitle= "Sac Besace",
				articleDescription="4 compartiments: poche principale, poche int\350rieure zipp\351e et 2 poches plaqu\351es sur le devant; fermeture rabat par 2 tops magn\351tiques plac\351s sous les boucles de r\351glages, porte clef, bandouli\350re ajustable par boucles, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 18cm, largeur 26cm, \351paisseur 6cm.";
				
			$("#besace_btnCouleur").removeClass("noDisplay");
			$("#menu_sac_2").addClass("activeMobil");
				
		} else if (article == 'sac_marron') {
			var source1 = "/media/photo-sac/Sac-besace-marron-face-doublure.jpg",
				source2 = "/media/photo-sac/Sac-besace-marron-face-2.jpg",
				source3 = "/media/photo-sac/Sac-besace-marron-doublure.jpg",
				articleTitle= "Sac Besace",
				articleDescription="4 compartiments: poche principale, poche int\350rieure zipp\351e et 2 poches plaqu\351es sur le devant; fermeture rabat par 2 tops magn\351tiques plac\351s sous les boucles de r\351glages, porte clef, bandouli\350re ajustable par boucles, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 18cm, largeur 26cm, \351paisseur 6cm.";	
				
			$("#besace_btnCouleur").removeClass("noDisplay");
			$("#menu_sac_1").addClass("activeMobil");
				
		} else if (article == 'sac_cabas') {
			var source1 = "/media/photo-sac/sac-cabas-marron-dessus.jpg",
				source2 = "/media/photo-sac/sac-cabas-marron-face.jpg",
				source3 = "/media/photo-sac/sac-cabas-marron-doublure.jpg",
				articleTitle= "Sac Cabas",
				articleDescription="Grand volume, 3 compartiments: grande poche principale avec fermeture par top magn\351tique, une poche int\350rieure zipp\351e et une poche ext\350rieure plaqu\351e avec fermeture par top magn\351tique, grande anse pour porter \340 l'\351paule, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 36cm, largeur 30cm, \351paisseur 8cm (peut contenir des formats A4).";
			
			$("#cabas_btnCouleur").removeClass("noDisplay");
			$("#menu_sac_3").addClass("activeMobil");
			
		} else if (article == 'sac_cabas_noire') {
			var source1 = "/media/photo-sac/sac-cabas-noir-dessus.jpg",
				source2 = "/media/photo-sac/sac-cabas-noir.jpg",
				source3 = "/media/photo-sac/sac-cabas-noir-doublure.jpg",
				articleTitle= "Sac Cabas",
				articleDescription="Grand volume, 3 compartiments: grande poche principale avec fermeture par top magn\351tique, une poche int\350rieure zipp\351e et une poche ext\350rieure plaqu\351e avec fermeture par top magn\351tique, grande anse pour porter \340 l'\351paule, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 36cm, largeur 30cm, \351paisseur 8cm (peut contenir des formats A4).";
			
			$("#cabas_btnCouleur").removeClass("noDisplay");
			$("#menu_sac_6").addClass("activeMobil");
			
		} else if (article == 'sac_cabas_marron_fonce') {
			var source1 = "/media/photo-sac/sac-cabas-marron-fonce-dessus.jpg",
				source2 = "/media/photo-sac/sac-cabas-marron-fonce.jpg",
				source3 = "/media/photo-sac/sac-cabas-marron-fonce-doublure.jpg",
				articleTitle= "Sac Cabas",
				articleDescription="Grand volume, 3 compartiments: grande poche principale avec fermeture par top magn\351tique, une poche int\350rieure zipp\351e et une poche ext\350rieure plaqu\351e avec fermeture par top magn\351tique, grande anse pour porter \340 l'\351paule, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 36cm, largeur 30cm, \351paisseur 8cm (peut contenir des formats A4).";
			
			$("#cabas_btnCouleur").removeClass("noDisplay");
				
		} else if (article == 'sac_bandou_jaune') {
			var source1 = "/media/photo-sac/sac-bandouliere-jaune-ouvert-poche.jpg",
				source2 = "/media/photo-sac/sac-bandouliere-jaune-face.jpg",
				source3 = "/media/photo-sac/sac-bandouliere-jaune-ouvert.jpg",
				articleTitle= "Sac Bandouli\350re \340 noeud",
				articleDescription="3 compartiments dont une poche int\350rieure zipp\351 et une poche ext\350rieure plaqu\351e, fermeture par top magn\351tique, bandouli\350re ajustable par simple noeud, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 22cm, largeur 27cm, \351paisseur 5cm.";
			
			$("#menu_sac_4").addClass("activeMobil");
			$("#bandou_btnCouleur").removeClass("noDisplay");
				
					
		} else if (article == 'sac_bandou_marron') {
			var source1 = "/media/photo-sac/sac-bandouliere-marron-ouvert-poche.jpg",
				source2 = "/media/photo-sac/sac-bandouliere-marron-face.jpg",
				source3 = "/media/photo-sac/sac-bandouliere-marron-ouvert.jpg",
				articleTitle= "Sac Bandouli\350re \340 noeud",
				articleDescription="3 compartiments dont une poche int\350rieure zipp\351 et une poche ext\350rieure plaqu\351e, fermeture par top magn\351tique, bandouli\350re ajustable par simple noeud, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 22cm, largeur 27cm, \351paisseur 5cm.";
			
			$("#menu_sac_5").addClass("activeMobil");
			$("#bandou_btnCouleur").removeClass("noDisplay");
			
		} else if (article == 'sac_bandou_noir') { 
			var source1 = "/media/photo-sac/sac-bandouliere-noir-portrait.jpg",
				source2 = "/media/photo-sac/sac-bandouliere-noir.jpg",
				source3 = "/media/photo-sac/sac-bandouliere-noir-doublure.jpg",
				articleTitle= "Sac Bandouli\350re \340 noeud",
				articleDescription="3 compartiments dont une poche int\350rieure zipp\351 et une poche ext\350rieure plaqu\351e, fermeture par top magn\351tique, bandouli\350re ajustable par simple noeud, cuir vachette ou veau, doublure en tissu.",
				articleDimension="Dimensions: hauteur 22cm, largeur 27cm, \351paisseur 5cm.";
			
			$("#bandou_btnCouleur").removeClass("noDisplay");
				
					
		}
		
		var	source1_medium = source1.slice(0,-4) + "-320.jpg",
			source2_medium = source2.slice(0,-4) + "-320.jpg",
			source3_medium = source3.slice(0,-4) + "-320.jpg",
			source1_low = source1.slice(0,-4) + "-100.jpg",
			source2_low = source2.slice(0,-4) + "-100.jpg",
			source3_low = source3.slice(0,-4) + "-100.jpg";
		
		if (document.getElementById("fancy_1").href != source1) {
			
			document.getElementById("fancy_1").href = source1;
			document.getElementById("fancy_2").href = source2;
			document.getElementById("fancy_3").href = source3;

			  $("#thumb_img_1").fadeTo(200,0.0, function() {
				  $("#thumb_img_1").attr("src",source1_low);
			  }).fadeTo(400,1);
			  $("#thumb_img_2").fadeTo(200,0.0, function() {
				  $("#thumb_img_2").attr("src",source2_low);
			  }).fadeTo(400,1);
			  $("#thumb_img_3").fadeTo(200,0.0, function() {
				  $("#thumb_img_3").attr("src",source3_low);
			  }).fadeTo(400,1);
			  
			  if (article == 'sac_pochette') {
				  
				  $("#img_base").fadeTo(200,0.0, function() {
					$("#img_base").attr("src",source1_medium);
				}).fadeTo(400,1);
				  
			  } else {
				
				
				$("#img_base").fadeTo(200,0.0, function() {
					$("#img_base").attr("src",source2_medium);
				}).fadeTo(400,1);
			  }
			  
			
			document.getElementById("fancy_base").href= source2;
			
			document.getElementById("fancy_1").rel = "fancybox";
			document.getElementById("fancy_2").rel = "NO";
			document.getElementById("fancy_3").rel = "fancybox";
			
			$("#thumb_img_1").addClass("borderClass");
			$("#thumb_img_2").addClass("borderClass");
			$("#thumb_img_3").addClass("borderClass");
			
			$("#thumb_img_1").removeClass("twoArticle");
			$("#thumb_img_3").removeClass("noDisplay");
			
			$("img_base").addClass("borderClass");
			
			document.getElementById("articleTitle").innerHTML = articleTitle;
			document.getElementById("articleTitleMobil").innerHTML = articleTitle;
			document.getElementById("articleDescription").innerHTML = articleDescription;
			document.getElementById("articleDescriptionMobil").innerHTML = articleDescription;
			document.getElementById("articleDimension").innerHTML = articleDimension;
			document.getElementById("articleDimensionMobil").innerHTML = articleDimension;
				
		}
		

		
		if (article == 'sac_cabas') {
			
		$("#thumb_img_2").removeClass("borderClass");
		$("#img_base").removeClass("borderClass");
			
		}
		
		if (article == 'sac_cabas_noire') {
			
		$("#thumb_img_2").removeClass("borderClass");
		$("#img_base").removeClass("borderClass");
			
		}
		
		if (article == 'sac_cabas_marron_fonce') {
			
		$("#thumb_img_2").removeClass("borderClass");
		$("#img_base").removeClass("borderClass");
			
		}
		
		if (article == 'sac_bandou_jaune') {
			
		$("#thumb_img_2").removeClass("borderClass");
		$("#img_base").removeClass("borderClass");
			
		}
		
		if (article == 'sac_bandou_noir') {
			
		$("#thumb_img_1").removeClass("borderClass");

			
		}
		
		if (article == 'sac_bandou_marron') {
		$("#thumb_img_1").removeClass("borderClass");
		}
		
		
		if (mobil) {
			
		$("#besace_btnCouleur").addClass("noDisplay");
		$("#bandou_btnCouleur").addClass("noDisplay");
		$("#cabas_btnCouleur").addClass("noDisplay");		
		
		var $body = $( 'body' ),
			$content = $( '#content' ),
			transitionEnd = 'transitionend webkitTransitionEnd otransitionend MSTransitionEnd';
	
			$body.addClass( 'animating' );
			$body.addClass( 'up anim6' );
			
		$('#toggle-menu').removeClass('noDisplay')

		$content.on( transitionEnd, function() {
			$body
			.removeClass( 'animating  up anim6' )
			.removeClass( 'menu-visible anim6' );
		$content.off( transitionEnd );
			});
			
		setTimeout( function(){
				 $body.removeClass( 'animating down up anim6' );
				 $body.removeClass( 'menu-visible anim6' );
				}, 300);

		}
	}

    function changeImage(object) {
		
		var url_medium = object.src.slice(0,-8)+"-320.jpg";
		var url_high = object.src.slice(0,-8)+".jpg";
		
		
        if (document.getElementById("img_base").src != url_medium) 
        {
            document.getElementById("img_base").src = url_medium;
            document.getElementById("fancy_base").href= url_high;
        }
	var temp_before = document.getElementsByClassName("fancyfake_before");
	var temp_after = document.getElementsByClassName("fancyfake_after");
	var temp_thumb = document.getElementsByClassName("articleView");
	var i;
	var str_fancy = "fancybox"; 
	var str_no = "NO"; 
	var bool_fancy = false; 
	for (i=0; i < temp_before.length; i++) {
		
		if (temp_before[i].href == url_high) {
			
			bool_fancy = true
			temp_before[i].rel= str_no
			temp_after[i].rel= str_no
			
			
		}
		else 
		{
			if (!bool_fancy) {
				temp_before[i].rel= str_fancy
				temp_after[i].rel= str_no
			}
			else {
				temp_before[i].rel= str_no
				temp_after[i].rel= str_fancy
			}	
		}
		
		/*console.log(temp_thumb[i].id)*/
		if ($("#".concat(temp_thumb[i].id)).hasClass("noDisplay")) {
			temp_before[i].rel= str_no
			temp_after[i].rel= str_no
		}
		
	}
	

	
	
	if ($(object).hasClass("borderClass")) {
		$("#img_base").addClass("borderClass");
	}
	else {
		$("#img_base").removeClass("borderClass");
	}
	
    }
	


	 
	 