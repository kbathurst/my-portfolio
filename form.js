"use strict";
$(document).ready( () => {

    //move focus to first textbox 
    $("#first_name").focus();

    //handler for click event of submit button
    $("#contact_form").submit( event => {
        let isValid = true;

        //validate first name entry
        const firstName = $("#first_name").val().trim();
        if (firstName == "") {
            $("$first_name").next().text("This field is required");
            isValid = false;
        } else {
            $("#first_name").next().text("");
        }
        $("#first_name").val(firstName);

        //validate last name entry
        const lastName = $("#last_name").val().trim();
        if (lastName == "") {
            $("$last_name").next().text("This field is required");
            isValid = false;
        } else {
            $("#last_name").next().text("");
        }
        $("#last_name").val(lastName);

        //validate the email entry with regular expression
        const emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,7}\b/;
        const email = $("#email").val().trim();
        if (email == "") {
            $("#email").next().text("This field is required.");
            isValid = false;
        } else if ( !emailPattern.test(email) ) {
            $("#email").next().text("Must be a valid email address.");
            isValid = false;
        } else {
            $("#email").next().text("");
        }
        $("#email").val(email);

        //validate subject entry
        if ( !$("#subject").attr("disabled")) {
            const subject = $("#subject").val().trim();
            if (subject == "") {
                $("#subject").next().text("This field is required.");
                isValid = false;
            } else {
                $("#subject").next().text("");
            }
            $("#subject").val(subject);
        }

        //validate message entry
        if ( !$("#message").attr("disabled")) {
            const message = $("#message").val().trim();
            if (message == "") {
                $("#message").next().text("This field is required.");
                isValid = false;
            } else {
                $("#message").next().text("");
            }
            $("#message").val(message);
        }

        // prevent the submission of the form if any entries are invalid
        if (isValid == false) {
            event.preventDefault();
        }
    });
});