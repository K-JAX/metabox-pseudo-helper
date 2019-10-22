<?php
/** 
 * Custom Metabox Pseudo Code
 * 
 * Practice this to get better at adding your own custom metaboxes
 * to Wordpress
 */

//  add action to call your custom metabox function (to be created)


// open a conditional to check if custom metabox function exists before creating


        // start custom metabox function

            // use worpdress function to add meta box - Decide where this metabox will go and
            // label your function callback accordingly, 
            // the function callback will do the actual creating of metabox content


// open conditional to check for metabox callback function before creating

    // start function and setup a post arguement
    // store all post meta in a variable
    // store all meta values from saved post from database into variables

    // create wordpress nonce function

    // create markup for metabox labels, inputs, and controls


// add action hook for function to save the metaboxes

// setup conditional to check if metabox saving function already exists

    // verify all data is pristine with a series of checks before proceeding to save
    // check if nonce is set and verify and sanitize nonce ("There should be as many nonces as you have metaboxes")

    // check if the post type exists and is the correct post type
    
        // if the current user can't edit page - insufficient privelages. Bail out

    // either way(else), if the user can't edit post, bail anyway

    // check if the edit page is being autosaved.
        // bail out. we don't want saves from autosave!!


    // verified - Okay to save!

    // store the resulting value from input into a variable with checks to make sure it exists(is set)

    // update the post meta with the stored variable value




