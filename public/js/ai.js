const CharacterAI = require("node_characterai");
const characterAI = new CharacterAI();
const readline = require("readline");

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});

(async () => {
    // Menggunakan token akses untuk autentikasi
    const sessionToken = "6af898d450a4fa4437db1a9453176efccedf9f2b";
    await characterAI.authenticateWithToken(sessionToken);

    // Tempatkan ID karakter Anda di sini
    const characterId = "kjScaPE3UllXk1lWdbXQeeip9aGvBupNFNvqv7fvnes";

    // Membuat objek chat untuk berinteraksi dengan percakapan
    const chat = await characterAI.createOrContinueChat(characterId);

    const askQuestion = () => {
        rl.question("Masukkan pesan Anda: ", async (userChat) => {
            // Mengirim pesan
            const response = await chat.sendAndAwaitResponse(userChat, true);
            console.log("Keitaro : " + response.text); // Menampilkan teks respons

            askQuestion(); // Memanggil lagi untuk input berikutnya
        });
    };

    askQuestion(); // Memulai loop pertanyaan
})();
