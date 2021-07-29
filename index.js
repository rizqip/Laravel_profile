const axios = require("axios");
const prompts = require("prompts");

(async () => {
    console.log("Mulai");
    const response = await prompts({
        type: "text",
        name: "username",
        message: "User Mana ?",
    });
    console.log("Mulai Scraping");
    getFollowers(response.username);
})();

async function getFollowers(username) {
    try {
        const { data } = await axios.get(
            `https://www.instagram.com/${username}/?__a=1`
        );
        // const { data } = await axios.get(`https://socialblade.com/instagram/user/${username}`, `//div[@class='YouTubeUserTopInfo']`);
        user = data.graphql.user;
        let followers = user.edge_followed_by.count;
        let user_name = user.username;
        let comment =
            user.edge_owner_to_timeline_media.edges[0].node
                .edge_media_to_comment.count;
        let like =
            user.edge_owner_to_timeline_media.edges[0].node.edge_liked_by.count;

        console.log(
            `${username} has ${followers}. with comment ${comment} and like ${like} in Last Post`
        );
    } catch (error) {
        console.log("USER NAME NOT FOUND");
    }
}
