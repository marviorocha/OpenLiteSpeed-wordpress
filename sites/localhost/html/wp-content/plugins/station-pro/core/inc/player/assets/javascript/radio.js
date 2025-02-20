const getData = async () => {
    try {
        const response = await fetch("../assets/javascript/station_data.json");

        if (!response.ok) {
            throw new Error(res.status);
        }

        const data = await response.json();
        return data;
    } catch (error) {
        "error:", error.message;
    }
};

const radio = async () => {
    const data = await getData();
    const radio_url =
        data["shoutcast"] != "" ? data["shoutcast"] + "/;" : data["icecast"];
    const audioFiles = [
        {
            name: "test",
            url: radio_url,
            coverArt: data["radio_logo"]["url"],
        },
    ];
    return { audioFiles, radio_url, data };
};

// const sync_radio = async () => {
//     const data = await getData();
//     const regex = /[^0-9]/gm;
//     const str = data["plugin_id"];
//     const stationHeaders = new Headers();
//     stationHeaders.append("Content-Type", "application/json");
//     stationHeaders.append("apikey", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im9vcXNwbGlweHphZXNzbGlvdmZ1Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MDg5ODIwMDQsImV4cCI6MjAyNDU1ODAwNH0.DLlLRBlq7NHvBUp5k__HYknQxysmtank6u1BNA7TUZ4");
//     const id_plugin = await str.replace(regex, '');
//     const id_small_plugin = await id_plugin.substring(0, 6);

// const raw = JSON.stringify({
//     "id": id_small_plugin,
//     "shoutcast": data["shoutcast"],
//     "icecast": data["icecast"],
//     "radio_name": data["radio_name"],
//     "radio_description": data["radio_description"],
//     "radio_logo": data["radio_logo"],
//     "plugin_id": str
// });

// const requestOptions = {
//     method: "PUT",
//     headers: stationHeaders,
//     body: raw,
//     redirect: "follow"
// };

// await fetch("https://ooqsplipxzaessliovfu.supabase.co/rest/v1/radios?id=eq." + id_small_plugin + "", requestOptions)
//     .then((response) => response.text())
//     .then((result) => console.log(result))
//     .catch((error) => console.error(error));
// };

// const audioFiles = [{
//   name: 'Testing',
//   url: 'https://521dimensions.com/song/DuskToDawn-Emancipator.mp3',
//   coverArt: 'https://521dimensions.com/img/open-source/amplitudejs/album-art/from-dusk-to-dawn.jpg',

// },
// {
//   name: "Song 2",
//   url: "https://521dimensions.com/song/DuskToDawn-Emancipator.mp3",
//   coverArt: "https://521dimensions.com/img/open-source/amplitudejs/album-art/from-dusk-to-dawn.jpg",
// },

// ];

const audioFiles = async () => {
    const station = await radio();

    return [
        {
            name: "Radio Test",
            url: station["radio_url"],
            coverArt: station["data"]["radio_logo"]["url"],
        },
    ];
};

const playerOptions = {
    songs: "",
    async fetchSongs() {
        const data = await audioFiles();
        this.songs = data;
        return this.songs;
    },
};

let openedWindow;

document.addEventListener("alpine:init", async () => {
    Alpine.data("app", () => ({
        async init() {
            const data_station = await radio();
            this.station_data = data_station["data"];
            this.screen = parseInt(data_station["data"]["screen"]);
        },

        play: true,
        load: false,
        vol: 50,
        favorite: false,
        screen: [],
        copyright: "StationPro.co",
        station_data: [],
        popup: true,

        widget: {
            ["@click"]() {
                this.play = false;
                this.load = false;
                Amplitude.stop();

                const toggle = (this.play = !this.play);

                this.screen = !this.screen;

                const openedWindow = window.open(
                    "widget.php",
                    "_blank",
                    "toolbar=no,menubar=no,scrollbars=no,resizable=no, top=300, left=500, width=460, height=420",
                    "widget"
                );
            },
        },

        closeWindow: {
            ["@click"]() {
                this.screen = true;
            },
        },

        main: {
            ["x-show"]() {
                this.toggle_marqueet = !this.toggle_marqueet;
            },
        },

        popup: {
            ["@click"]() {
                this.popup = !this.popup;
                window.close();
            },
        },

        navplayer: {
            ["@click"]() {
                this.load = true;

                const toggle = (this.play = !this.play);
                setTimeout(() => {
                    this.load = !this.load;
                    toggle === true ? Amplitude.stop() : Amplitude.play();
                }, 900);
            },

            ["x-init"]() {
                this.play = true;
                this.load = false;
            },
        },

        playing: {
            ["@click"]() {
                this.load = true;

                const toggle = (this.play = !this.play);
                setTimeout(() => {
                    this.load = !this.load;
                    toggle === true ? Amplitude.stop() : Amplitude.play();
                }, 900);
            },

            ["x-init"]() {
                this.play = true;
            },
        },

        toggleFavorite: {
            ["@click"]() {
                this.favorite = !this.favorite;
            },
        },
        initializePlayer: async () => {
            const data = await audioFiles();

            Amplitude.init({
                songs: [{ name: "Song 2", url: data[0]["url"] }],

                callbacks: {
                    initialized: function () {},
                },
            });

            return Amplitude;
        },
    }));
});
