<!DOCTYPE html>

<?php
include('./connexion.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FUT</title>
    <link rel="stylesheet" href="assets/css/st.css">
</head>
<body class="bg-[url('../images/stadium_background.webp')]">
    <main>
        <section class="">
            
            <div class="p-4">
                
                <div class="flex flex-col lg:flex-row gap-4">
                  
                  <div class="flex-1 rounded-lg shadow-lg p-4">
                    
                    <div class="bg-white p-4 rounded-lg text-white text-center mb-4">
                      <h2 class="font-bold">Squad</h2>
                      <div class="flex justify-around mt-4">
                        <div>
                          <span class="block text-sm">Players Selected</span>
                          <span class="font-bold text-xl">0 / 11</span>
                        </div>
                        <div>
                          <span class="block text-sm">udgbf</span>
                          <span class="font-bold text-xl">ege</span>
                        </div>
                        <div class="mb-4">
                            <select id="formation-select">
                                <option value="4-3-3">4-3-3</option>
                                <option value="4-4-2">4-4-2</option>
                                <option value="3-5-2">3-5-2</option>
                              </select>
                        </div>
                       </div>
                    </div>
              
                    <div id="equipe" class="p-4 rounded-lg relative">
                       
                       <!-- <div id="squad" style="background-image: url(../img/https3A2F2Fcdn.png); background-repeat: no-repeat; background-size: 900px;" class="squad_builder">
                            <div data-position="GK" class="player player1">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>GK</p>
                            </div>
                        
                            <div data-position="LB" class="player player2">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>LB</p>
                            </div>
                            <div data-position="CB" class="player player3">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>CB</p>
                            </div>
                            <div data-position="CB" class="player player4">
                                <div class= "player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>CB</p>
                            </div>
                            <div data-position="RB" class="player player5">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>RB</p>
                            </div>
                            <div data-position="CM" class="player player6">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>CM</p>
                            </div>
                            <div data-position="CM" class="player player7">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>CM</p>
                            </div>
                            <div data-position="CM" class="player player8">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>CM</p>
                            </div>
                            <div data-position="LW" class="player player9">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>LW</p>
                            </div>
                            <div data-position="ST" class="player player10">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>ST</p>
                            </div>
                            <div data-position="RW" class="player player11">
                                <div class="player transition-all hover:scale-105"><img src="../img/badge_gold.webp" style="width: 110px ; height: 150px;" alt=""></div>
                                <p>RW</p>
                            </div>
                        
                       </div> -->
                       <div id="squad" class="squad_builder" style="background-image: url(assets/images/https3A2F2Fcdn.png); background-repeat: no-repeat; background-size: 900px;">
                        <!-- Various player positions on the pitch -->
                        <div data-position="GK" class="player player1">
                            <div class="player1 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>GK</p>
                        </div>
                        <div data-position="RB" class="player player2">
                            <div class="player2 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>RB</p>
                        </div>
                        <div data-position="CB" class="player player3">
                            <div class="player3 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>CB</p>
                        </div>
                        <div data-position="CB" class="player player4">
                            <div class="player4 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>CB</p>
                        </div>
                        <div data-position="LB" class="player player5">
                            <div class="player5 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>LB</p>
                        </div>
                        <div data-position="CM" class="player player6">
                            <div class="player6 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>CM</p>
                        </div>
                        <div data-position="CM" class="player player7">
                            <div class="player7 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>CM</p>
                        </div>
                        <div data-position="CM" class="player player8">
                            <div class="player8 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>CM</p>
                        </div>
                        <div data-position="RW" class="player player9">
                            <div class="player9 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>RW</p>
                        </div>
                        <div data-position="ST" class="player player10">
                            <div class="player10 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>ST</p>
                        </div>
                        <div data-position="LW" class="player player11">
                            <div class="player11 transition-all hover:scale-105"><img src="assets/images/badge_gold.webp" style="width: 110px; height: 150px;" alt=""></div>
                            <p>LW</p>
                        </div>
                    </div>
                    </div>
              
                    
                  </div>
              
                  <div id="players-container" class="w-full lg:w-1/3 bg-white rounded-lg shadow-lg p-4">
                    <h2 class="text-lg font-bold mb-4">Player Selection</h2>
                    <div class="flex justify-center gap-3 mt-5 mb-5">
                        <!-- Modal toggle -->
                        <button id="toggle-modal-btn" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-black bg-[#FFC57A] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                           Ajouter
                        </button>
          
                           <!-- Main modal -->
                          <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                               <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                     <!-- Modal header -->
                                     <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                           Ajouter Nouveau Joueur
                                        </h3>
                                        <button id="cancel-btn"type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                     </div>
                                   <!-- Modal body -->
                                   <form class="p-4 md:p-5">
                                     <div class="grid gap-4 mb-4 grid-cols-2">
                                       <div class="col-span-2">
                                           <label for="imagejoueur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image de joueur</label>
                                           <input type="file" name="imagejoueur" id="image-joueur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                       </div>
                                       <div class="col-span-2">
                                          <label for="logoclub" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logo du Club</label>
                                          <input type="file" name="logo" id="logo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                       </div>
                                       <div class="col-span-2">
                                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de Joueur</label>
                                          <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Titre de Service" required="">
                                       </div>
                                       <!-- <div class="col-span-2 sm:col-span-1">
                                          <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                          <input type="tex" name="position" id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="GK-CM-CB...." required="">                                  
                                       </div> -->
                                       <div class="col-span-2 sm:col-span-1">
                                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                        <select name="position" id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                            <option value="">Sélectionner une position</option>
                                            <option value="GK">GK</option>
                                            <option value="LB">LB</option>
                                            <option value="CB">CB</option>
                                            <option value="RB">RB</option>
                                            <option value="CM">CM</option>
                                            <option value="LW">LW</option>
                                            <option value="RW">RW</option>
                                            <option value="ST">ST</option>
                                        </select>
                                    </div>
                                       <div class="col-span-2 sm:col-span-1">
                                          <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                                          <input type="number" name="rating" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="80-75-97...." required="">
                                       </div>
                                       <div class="col-span-2 sm:col-span-1">
                                          <label for="pace" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pace</label>
                                          <input type="number" name="pace" id="pace" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="80-75-97...." required="">
                                       </div>
                                       <div class="col-span-2 sm:col-span-1">
                                          <label for="shooting" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shooting</label>
                                          <input type="number" name="shooting" id="shooting" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="80-75-97...." required="">
                                       </div>
                                       <div class="col-span-2 sm:col-span-1">
                                          <label for="passing" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passing</label>
                                          <input type="number" name="passing" id="passing" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="80-75-97...." required="">
                                       </div>
                                       <div class="col-span-2 sm:col-span-1">
                                          <label for="dribbling" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dribbling</label>
                                          <input type="number" name="dribbling" id="dribbling" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="80-75-97...." required="">
                                       </div>
                                       <div class="col-span-2 sm:col-span-1">
                                          <label for="defending" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Defending</label>
                                          <input type="number" name="defending" id="defending" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="80-75-97...." required="">
                                       </div>
                                       <div class="col-span-2 sm:col-span-1">
                                          <label for="physical" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Physical</label>
                                          <input type="number" name="physical" id="physical" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="80-75-97...." required="">
                                       </div>
                                       <div class="col-span-2 sm:col-span-1">
                                        <label for="diving">Diving :</label>
                                        <input type="number" id="diving" placeholder="Diving (GK)" />
                                     </div>
                                     <div class="col-span-2 sm:col-span-1">
                                        <label for="handling">Handling :</label>
                                        <input type="number" id="handling" placeholder="Handling (GK)" />
                                     </div>
                                     <div class="col-span-2 sm:col-span-1">
                                        <label for="kicking">Kicking :</label>
                                        <input type="number" id="kicking" placeholder="Kicking (GK)" />
                                     </div>
                                     <div class="col-span-2 sm:col-span-1">
                                        <label for="reflexes">Reflexes :</label>
                                        <input type="number" id="reflexes" placeholder="Reflexes (GK)" />
                                     </div>
                                     <div class="col-span-2 sm:col-span-1">
                                        <label for="speed">Speed :</label>
                                        <input type="number" id="speed" placeholder="Speed (GK)" />
                                     </div>
                                     <div class="col-span-2 sm:col-span-1">
                                        <label for="positioning">Positioning :</label>
                                        <input type="number" id="positioning" placeholder="Positioning (GK)" />
                                     </div>
                                      </div>
                                     <button id="ajouter-joueur" type="button"class="text-black inline-flex items-center bg-[#FFC57A] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                         Ajouter joueur
                                     </button>
                                    </form>
                   </div>
                   </div>
                          </div> 
                        
                    </div>
                    <div class="overflow-y-scroll h-[500px]" id="cards">
                        <div id="card" class="player transition-all hover:scale-105 flex flex-row">
                            
                        </div>
                    </div>
                </div>
                  </div>
            </div>
              

        </section>                                         
        
    </main>
    <script src="src/team.js"></script>
</body>
</html>


<!-- <?php
// try {
//     $connect = mysqli_connect(
//         'db', // Hostname (Docker service name)
//         'myphp', // Username
//         'mypassword', // Password
//         'futgestion' // Database name
//     );
    
//     $table_name = "user";
    
//     $query = "SELECT * FROM $table_name";
//     $response = mysqli_query($connect, $query);
    
// } 
// catch(Exception $e) {
//     echo "Error: " . $e->getMessage();
// }
?> -->