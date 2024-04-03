// connect.js

$(document).ready(function() {
    // Event handler for the "Connect" button click
    $('.connect-btn').click(function() {
        console.log('Connect button clicked');
        // Get the candidate's email from the data attribute
        var candidateEmail = $(this).data('email');
        
        
        // Assuming you already have the agent's ID stored in a variable called agentId
        // You can fetch agentId using another AJAX call or any other method
        // Assuming agentId is fetched and available
        var agentId = $('script[src="agentconnect.js"]').data('agent-id');
        //var agentId = agentId;
        
        // Assuming you have a PHP file to handle the connection process (e.g., connect.php)
        // Send an AJAX request to connect the agent and the candidate
        $.ajax({
            url: 'agentconnectphp.php',
            method: 'POST',
            data: {
                agentId: agentId,
                candidateEmail: candidateEmail
            },
            success: function(response) {
                // Handle the response from connect.php if needed
                 $('#success-message').html('Connection successful!').show();
                //console.log(response);
                //alert('Connection successful!');
            },
            error: function(xhr, status, error) {
                // Handle errors if any
                //console.error(xhr.responseText);
                //alert('Error connecting. Please try again later.');
                   console.error('AJAX request failed:', error);
                alert('Error connecting. Please try again later.');
            }
        });
    });
});
