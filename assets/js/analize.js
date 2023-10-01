const general = {
    init: function () {
        this.insertAmount();
        this.completos();
        this.cardModal();
        this.loadDeck();
    },
    loadDeck: function () {

        $('.save-deck').on('click', function () {
            const template = `
            <div class="user-deck btn btn-outline-primary">
                <span class="load-deck" data-deck="<?php echo $deck['deck'] ?>" data-id_deck="<?php echo $deck['id_deck'] ?>"><?php echo $deck["deck_name"] ?></span>
                <span class="delete-deck" data-id_deck="<?php echo $deck['id_deck'] ?>"><i class="fa-solid fa-xmark"></i></span> 
            </div>`

            const data = {
                deck: $('.deck-sim').val(),
                deckName: $('.deck-name').val()
            }

            $.ajax({
                type: 'POST',
                url: 'analize.php',
                data: { action: 'save-deck', data },
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    let clone = $(template).clone();
                    clone.find('.delete-deck').data('id_deck', response.id_deck);
                    clone.find('.load-deck').data('deck', data.deck).val(data.deckName);
                    clone.find('.load-deck').data('id_deck', response.id_deck);
                    clone.find('.load-deck').text(data.deckName);
                    $('.decks-container').append(clone);
                },
                error: function (err) {
                    console.log(err);
                }
            });
        });

        $(document).on('click', '.delete-deck', function () {
            const id_deck = $(this).data('id_deck');
            const divContainer = $(this).parent();

            $.ajax({
                type: 'POST',
                url: 'analize.php',
                data: { action: 'delete-deck', id_deck },
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    divContainer.remove();
                },
                error: function (err) {
                    console.log(err);
                }
            });
        });

        $('.load-deck').on('click', function () {
            $('.deck-sim').val($(this).data('deck'));
        });
    },
    cardModal: function () {

        $('.cards img').on('click', function () {
            console.log($(this))
            $('#card-modal .modal-body img').attr('src', $(this).attr('src'));
            $('#card-modal').modal('show');
        });
    },
    completos: function () {

        $('.completos').on('change', function () {

            if ($(this).is(':checked')) {
                $('li:has(.bg-success)').hide();
            } else {
                $('li').show();
            }
        });
    },
    insertAmount: function () {

        $('.insert-amount').on('click', function () {
            const p = $(this).find('p');
            const input = $(this).find('input');

            p.toggle();
            input.toggle();
            input.focus().select();
        });

        $('.insert-amount input').on('click', function (e) {
            e.stopPropagation();
        })

        $('.insert-amount input').on('blur', function (e) {

            const p = $(this).parent().find('p');
            const input = $(this);
            p.toggle();
            input.toggle();
        })

        $('.insert-amount>input').on('input', function () {

            const p = $(this).parent().find('p');
            const amount_owner = $(this).parent().find('span').eq(0);
            const amount_required = $(this).parent().find('span').eq(1);

            const count = $(this).val();
            const id_card = $(this).data('id_card');

            $.ajax({
                type: 'POST',
                url: 'analize.php',
                data: { action: 'insert-amount', id_card, count },
                dataType: 'json',
                success: function (response) {
                    if (count <= amount_required) {
                        p.addClass('bg-success');
                        p.removeClass('bg-warning');
                    } else {
                        p.removeClass('bg-success');
                        p.addClass('bg-warning');
                    }
                    amount_owner.text(count);
                },
                error: function (err) {
                    console.log(err);
                }
            });
        })
    }
};

general.init();
