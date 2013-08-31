<?php 

/* The Search Form */

?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <fieldset>
        <input autocomplete="off" type="text" data-provide="typeahead" name="s" id="search" value="<?php the_search_query(); ?>" data-items="4" data-source="[&quot;WHAT CANADA NEEDS NOW&quot;,
        &quot;10 REALITIES&quot;,
        &quot;HOW U OF T  IGNITES INNOVATION&quot;,
        &quot;INNOVATION AND ACHIEVEMENT&quot;,
        &quot;INNOVATING EDUCATION&quot;,
        &quot;CAN HAITI’S BUILDINGS WITHSTAND THE NEXT EARTHQUAKE?&quot;,
        &quot;CAN A SUPERCOMPUTING PARTNERSHIP FIX BAD TRAFFIC?&quot;,
       &quot;ADDING INTELLIGENCE TO HUMAN AND INFORMATION ASSESSMENT&quot;,     
       &quot;REINVENTING THE TOILET— AND SAVING LIVES&quot;,
       &quot;BUILDING A BETTER MARS ROBOT&quot;,
        &quot;FOR THOSE WITH HIV IN DEVELOPING COUNTRIES, A LAB-ON-A-CHIP THAT COMES TO THEM&quot;,
        &quot;TURNING THE DOCTOR’S OFFICE INTO A ONE-STOP SHOP&quot;,
        &quot;ECO-TEC: FIGHTING POLLUTION, CREATING JOBS AND PROSPERITY&quot;,
        &quot;TRACKING TRENDS ON SOCIAL MEDIA&quot;,
        &quot;HELPING CROPS SURVIVE DROUGHT— AND FARMERS TO THRIVE&quot;,
        &quot;IN KINGSTON GALLOWAY/ORTON PARK, UTSC HELPS A COMMUNITY RISE UP&quot;,
        &quot;SWITCHING OFF CANCER&quot;,
        &quot;Barfoot&quot;,
        &quot;Oliveira&quot;,
        &quot;Gray&quot;,
        &quot;Pelletier&quot;,
        &quot;Miller&quot;,
        &quot;Aladdin&quot;,
        &quot;Cheng&quot;,
        &quot;Dou&quot;,
        &quot;Aitchison&quot;,
        &quot;Kelley&quot;,
        &quot;Simmons&quot;,
        &quot;Koudas&quot;,
        &quot;Bansal&quot;,
        &quot;Northey&quot;,
        &quot;Bunce&quot;,
        &quot;Campbell&quot;,
        &quot;Gunning&quot;
        ]"/>
        
        <input type="submit" class="icon-zoom-in submit-btn" name="submit" id="searchsubmit" value="<?php esc_attr_e( ' ', 'mr-theme' ); ?>" style="height: 20px;
 background-color: transparent; border: 0; width: 15px;"/>
    </fieldset>
</form>
