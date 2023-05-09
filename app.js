const { createApp } = Vue;

createApp({
  data() {
    return {
      tasks: [],
      ContenutoNewTask: "",
      takeTask: "./takeTask.php",
      getTask: "./postTask.php",
    };
  },
  methods: {
    SendNewTask() {
      this.tasks.push({
        daFare: this.ContenutoNewTask,
        completato: "false",
      });
      axios
        .post(this.getTask, this.tasks, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => console.log(response))
        .catch((error) => console.error(error.message));
    },
    deleteTask(index) {
      this.tasks.splice(index, 1);
      axios
        .post(this.getTask, this.tasks, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => console.log(response))
        .catch((error) => console.error(error.message));
    },
  },
  mounted() {
    axios
      .get(this.takeTask)
      .then((response) => {
        this.tasks = response.data;
      })
      .catch((error) => console.error(error.message));
  },
}).mount("#app");
