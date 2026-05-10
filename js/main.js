$(function() {
	/*_____ Toggle _____*/
	$(document).on("click", ".toggle", function() {
		$(".toggle").toggleClass("active");
		$("body").toggleClass("flow");
		$("nav").toggleClass("active");
		$(".upperlay").toggleClass("active");
		$("nav > ul > li > .sub").slideUp();
	});
	$(document).on("click", ".mobileDashToggle", function() {
		$(this).parents('.dash-List').next('.dash-List').slideToggle();
	})
	w = $(window).width();
	if (w <= 991) {
		$(document).on("click", "nav > ul > li.drop > a", function(e) {
			e.preventDefault();
			$(".sub")
				.not(
					$(this)
						.parent()
						.children(".sub")
						.slideToggle()
				)
				.slideUp();
		});
	}
	$(window).on("resize", function() {
		$("nav > ul > li > .sub").removeAttr("style");
	});

	/*_____ Upload File _____*/
	var upldFile;
	$(document).on("click", ".uploadImg[data-upload]:not(.uploaded)", function() {
		upldFile = $(this).attr("data-upload");
		$(this).data("preText", $(this).attr("data-text"));
		$(this)
			.parents("form")
			.find(`input[type="file"][data-upload="${upldFile}"]`)
			.trigger("click");
	});
	$(document).on("click", ".uploadImg[data-upload].uploaded", function() {
		upldFile = $(this).attr("data-upload");
		$(this)
			.attr("data-text", $(this).data("preText"))
			.removeClass("uploaded");
		$(this)
			.parents("form")
			.find(`input[type="file"][data-upload="${upldFile}"]`)
			.get(0).value = "";
	});
	$(document).on("change", ".uploadFile[data-upload]", function() {
		// alert(imgFile);
		let file = $(this).val();
		let preText = $(`.uploadImg[data-upload="${upldFile}"]`).data("preText");
		if (this.files.length > 0) {
			$(`.uploadImg[data-upload="${upldFile}"]`)
				.addClass("uploaded")
				.attr("data-text", file);
		} else {
			$(`.uploadImg[data-upload="${upldFile}"]`)
				.removeClass("uploaded")
				.attr("data-text", preText);
		}
		// console.log(this.files.length);
		// $(`.uploadImg[data-upload="${upldFile}"]`).html(file);
	});

	/*_____ Drop Down _____*/
	$(document).on("click", ".dropBtn", function(e) {
		e.stopPropagation();
		if (
			$(this)
				.parents(".dropCnt:first")
				.hasClass("active")
		)
			$(this)
				.parents(".dropCnt:first")
				.find(".dropCnt:first")
				.addClass("active");
		else {
			$(".dropCnt")
				.not(
					$(this)
						.parent()
						.children(".dropCnt")
				)
				.removeClass("active");
			$(this)
				.parents(".dropDown:first")
				.find(".dropCnt:first")
				.toggleClass("active");
		}
	});
	$(document).on("click", ".dropCnt", function(e) {
		e.stopPropagation();
	});
	$(document).on("click", function() {
		$(".dropCnt").removeClass("active");
	});

	/*_____ Popup _____*/
	$(document).on("click", ".popup", function(e) {
		if ($(e.target).closest(".popup ._inner, .popup .inside").length === 0) {
			$(".popup").fadeOut("3000");
			$("body").removeClass("flow");
		}
	});
	$(document).on("click", ".crosBtn", function() {
		$(".popup").fadeOut();
		$("body").removeClass("flow");
	});
	$(document).keydown(function(e) {
		if (e.keyCode == 27) $(".popup .crosBtn").click();
	});
	$(document).on("click", ".popBtn", function() {
		var popUp = $(this).data("popup");
		$("body").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
	});

	/*_____ FAQ's _____*/
	$(document).on("click", ".faqBlk > h5", function() {
		$(".faqBlk")
			.not(
				$(this)
					.parent()
					.toggleClass("active")
			)
			.removeClass("active");
		$(".faqBlk > .txt")
			.not(
				$(this)
					.parent()
					.children(".txt")
					.slideToggle()
			)
			.slideUp();
	});
	$(".faqLst > .faqBlk:nth-child(1)").addClass("active");

	$(document).on("click", ".txtGrp.pasDv > i.icon-eye", function() {
		$(this).addClass("icon-eye-slash");
		$(this).removeClass("icon-eye");
		$(this)
			.parent()
			.find(".txtBox")
			.attr("type", "text");
	});
	$(document).on("click", ".txtGrp.pasDv > i.icon-eye-slash", function() {
		$(this).addClass("icon-eye");
		$(this).removeClass("icon-eye-slash");
		$(this)
			.parent()
			.find(".txtBox")
			.attr("type", "password");
	});

	$(document).on("click", ".blk.collap > ._header > .downBtn", function() {
		$(this)
			.parent()
			.next("._content:first")
			.slideToggle();
	});

	$(document).on("focus", ".txtGrp .txtBox:not(select):not(.uploadImg)", function() {
		$(this)
			.parents(".txtGrp:first")
			.find("label:first")
			.addClass("move");
	});

	$(document).on("blur", ".txtGrp .txtBox:not(select):not(.uploadImg)", function() {
		if (this.value == "")
			$(this)
				.parents(".txtGrp:first")
				.find("label:first")
				.removeClass("move");
	});
});

$(window).on("load", function() {
	$("img")
		.parent("a:not(.webBtn)")
		.css("display", "block");
	$(".loader")
		.delay(700)
		.fadeOut();
	$("#pageloader")
		.delay(1200)
		.fadeOut("slow");
});
