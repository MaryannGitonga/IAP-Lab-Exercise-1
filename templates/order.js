$(document).ready(function() {
    $('#order-button').click(function(event){
        event.preventDefault();
        var food = $('#food-name').val();
        var quantity = $('#food-quantity').val();

        alert("This feature is coming soon.");
        return;

        $.ajax({
            url: "api.food.com/order",
            type: "post",
            header: {
                "api-key": "jkhdnsiweinakd"
            },
            data: {
                "food_name": food,
                "units": quantity
            },
            success: function(data){
                //process the data
            },
            error: function (error) {
                alert("An error occurred");
            }
        });
    });

    $('#status-button').click(function (event) {
        event.preventDefault();
        var id = $('#order-id').val();

        alert("This feature is coming soon.");
        return;

        $.ajax({
            //response status code, body
        });
    })
});