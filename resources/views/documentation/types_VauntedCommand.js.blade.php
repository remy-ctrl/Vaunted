
@extends('layouts.base')
@section ('title', 'VauntedCommand')
@section('content')
@include ('layouts.docs-nav')


<div id="main">

    <h1 class="page-title">Source: types/VauntedCommand.js</h1>






    <section>
        <article>
            <pre class="prettyprint source linenums"><code>const Discord = require("discord.js");

class VauntedCommand {
    /**
     * Creates a Vaunted Command
     * @constructor
     */
    constructor() {
        this.embed = this.embed;
        this.music = this.music;
    }
    /**
     * Creates the Vaunted Command Handler Client
     * @param {Object} embedData - The data for embed.
     * @param {String} embedData.title - The title for the embed.
     * @param {ColorResolvable} embedData.color - The color of the embed.
     * @param {String} embedData.description - The description of the embed.
     * @param {String} embedData.footer - The footer of the embed.
     * @param {String} embedData.thumbnail - The thumbnail of the embed.
     * @param {String} embedData.image - The image of the embed.
     * @param {String} embedData.url - The url for the embed.
     * @param {Object} embedData.author - The author of the embed.
     * @param {Any} embedData.author.name - The authors name of the embed.
     * @param {String} embedData.author.icon - The authors icon of the embed.
     * @param {String} embedData.author.url - The authors url of the embed.
     * @returns {RichEmbed} - The built embed.
     */


    embed(embedData) {
        const embedBuild = new Discord.RichEmbed();

        if (embedData.title) embedBuild.setTitle(embedData.title);
        if (embedData.color) embedBuild.setColor(embedData.color);
        if (embedData.description) embedBuild.setDescription(embedData.description);
        if (embedData.footer) embedBuild.setFooter(embedData.footer);
        if (embedData.thumbnail) embedBuild.setThumbnail(embedData.thumbnail);
        if (embedData.url) embedBuild.setURL(embedData.url);
        if (embedData.author) embedBuild.setAuthor(embedData.author);
        if (embedData.image) embedBuild.setImage(embedData.image);

        return embedBuild;
    }
}

module.exports = VauntedCommand;</code></pre>
        </article>
    </section>




</div>

<nav>
    <h2><a href="index.html">Home</a></h2><h3>Classes</h3><ul><li><a href="CommandLoader.html">CommandLoader</a></li><li><a href="Vaunted.html">Vaunted</a></li><li><a href="VauntedCommand.html">VauntedCommand</a></li></ul><h3>Global</h3><ul><li><a href="global.html#Convert">Convert</a></li></ul>
</nav>

<br class="clear">

<footer>
    Documentation generated by <a href="https://github.com/jsdoc/jsdoc">JSDoc 3.6.3</a> on Fri Oct 18 2019 20:44:24 GMT+0100 (British Summer Time)
</footer>

<script> prettyPrint(); </script>
<script src="scripts/linenumber.js"> </script>
@endsection