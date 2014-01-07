$(document).ready(function()
{
	var maxscore = 5;
	var fullstarleft = 'medias/img/rating/lf.png';
	var emptystarleft = 'medias/img/rating/le.png';
	var fullstarright = 'medias/img/rating/rf.png';
	var emptystarright = 'medias/img/rating/re.png';
	var modifi = 'medias/img/rating/modif.png';

	var full = 1;
	var half = 0.5;

	for(i = 1; i < maxscore + 1; i++)
	{
		$(".stars").append('<img title="'+half+'" class="starl star star'+i+'l" src="'+emptystarleft+'"><img title="'+full+'" class="starr star star'+i+'r" src="'+emptystarright+'">');
		full++;
		half++;
	}

	$(".stars").each(function()
	{
		var score = $(this).attr('data-rate');
		var which = $(this);
		init_rate(score, which);
	});
		
	$(".star").mouseover(function()
	{
		if($(this).parent('.stars').attr('data-click') != 'yes')
		{
			$(this).prevAll('.starl').attr('src',fullstarleft);
			$(this).prevAll('.starr').attr('src',fullstarright);
			$(this).nextAll('.starl').attr('src',emptystarleft);
			$(this).nextAll('.starr').attr('src',emptystarright);
			if($(this).hasClass('starl'))
			{
				$(this).attr('src',fullstarleft);
			}
			else if($(this).hasClass('starr'))
			{
				$(this).attr('src',fullstarright);
			}
		}
	});
		
	$(".stars").mouseleave(function()
	{
		if($(this).attr('data-click') != 'yes')
		{
			var score = $(this).attr('data-rate');
			var which = $(this);
			init_rate(score, which);
		}
	});


	$(".star").click(function()
	{
		if($(this).parent('.stars').attr('data-click') != 'yes')
		{
			$(this).parent('.stars').attr('data-click','yes');
			var score = $(this).attr('title');
			var which = $(this).parent('.stars');
			init_rate(score, which);
			$(this).parent('.stars').append('<img title="Change your rate" class="modifi" src="'+modifi+'">');
		}
	});

	$(".stars").on('click','.modifi', function()
	{
		var score = $(this).parent('.stars').attr('data-rate');
		var which = $(this).parent('.stars');
		which.attr('data-click','no');
		init_rate(score, which);
		$(this).remove();
	});
		
	function init_rate(score, which)
	{
		var isdeci = score.split('.')[1];
		var roundscore = score.split('.')[0];
		var isfloor;
		var roundl = '.star'+roundscore+'l';
		var roundr = '.star'+roundscore+'r';
		var scorel = '.star'+score+'l';
		var scorer = '.star'+score+'r';
		if(score < 0.5)
		{
			$(".starl").attr('src',emptystarleft);
			$(".starr").attr('src',emptystarright);
		}
		else
		{
			if(isdeci)
			{
				if(isdeci < 5)
				{
					isfloor = true;
				}
				else
				{
					isfloor = false;
				
				}
				if(isfloor == false)
				{
					roundscore = parseInt(roundscore) + 1;
					roundl = '.star'+roundscore+'l';
					roundr = '.star'+roundscore+'r';
					which.children(roundl).attr('src',fullstarleft);
					which.children(roundl).nextAll('.starl').attr('src',emptystarleft);
					which.children(roundl).nextAll('.starr').attr('src',emptystarright);
					which.children(roundr).prevAll('.starr').attr('src',fullstarright);
					which.children(roundl).prevAll('.starl').attr('src',fullstarleft);
				}
				else if(isfloor == true)
				{
					which.children(roundl).attr('src',fullstarleft);
					which.children(roundr).attr('src',fullstarright);
					which.children(roundl).nextAll('.starl').attr('src',emptystarleft);
					which.children(roundr).nextAll('.starr').attr('src',emptystarright);
					which.children(roundr).prevAll('.starr').attr('src',fullstarright);
					which.children(roundl).prevAll('.starl').attr('src',fullstarleft);
				}
			}
			else
			{
				which.children(scorel).attr('src',fullstarleft);
				which.children(scorer).attr('src',fullstarright);
				which.children(scorel).prevAll('.starl').attr('src',fullstarleft);
				which.children(scorer).prevAll('.starr').attr('src',fullstarright);
				which.children(scorel).nextAll('.starl').attr('src',emptystarleft);
				which.children(scorer).nextAll('.starr').attr('src',emptystarright);
			}
		}
	}
});