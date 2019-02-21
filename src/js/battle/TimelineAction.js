// An action set in Sandbox Mode to be interpreted by Battle.js into a TimelineEvent

function TimelineAction(type, actor, turn, value, settings){
	this.type = type;
	this.actor = actor;
	this.turn = turn;
	this.value = value;
	this.settings = settings;
}